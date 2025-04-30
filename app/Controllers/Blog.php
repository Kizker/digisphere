<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    protected $blogModel;

    public function __construct()
    {
        $this->blogModel = new BlogModel();
    }

    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login'); // Cek apakah sudah login
        }

        $currentPage = $this->request->getVar('page_blog') ?: 1;
        $keyword = $this->request->getVar('keyword');

        // Pencarian jika ada keyword
        if ($keyword) {
            $blog = $this->blogModel->search($keyword);
        } else {
            $blog = $this->blogModel;
        }

        $data = [
            'blog' => $blog->paginate(10, 'blog', $currentPage),
            'pager' => $this->blogModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/dashboard', $data);
    }

    public function detail($slug)
    {
        $data = [
            'blog' => $this->blogModel->getBlog($slug)
        ];

        return view('admin/detail', $data);
    }

    public function create()
    {
        $data = [
            'validation' => session('validation') ?? \Config\Services::validation()
        ];

        return view('admin/create', $data);
    }

    public function save()
    {
        // Validasi Input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[blog.judul]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => '{field} harus berupa gambar',
                    'mime_in' => '{field} harus berformat JPG, JPEG, atau PNG'
                ]
            ],
            'konten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        // Upload Gambar
        $gambar = $this->request->getFile('gambar');
        $namaGambar = $gambar->getError() == 4 ? 'default.jpg' : $gambar->getRandomName();
        if ($gambar->getError() != 4) {
            $gambar->move(ROOTPATH . 'public/assets/gambar/', $namaGambar);
        }

        // Simpan data blog
        $this->blogModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $this->request->getVar('slug'),
            'penulis' => $this->request->getVar('penulis'),
            'gambar' => $namaGambar,
            'konten' => $this->request->getVar('konten')
        ]);

        session()->setFlashdata('pesan', 'Blog berhasil ditambahkan');
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        // Cari gambar berdasarkan ID
        $blog = $this->blogModel->find($id);

        // Hapus gambar jika ada (selain default)
        if ($blog['gambar'] != 'default.jpg') {
            $path = FCPATH . 'assets/gambar/' . $blog['gambar'];
            if (file_exists($path) && is_file($path)) {
                unlink($path);
            }
        }

        $this->blogModel->delete($id);
        session()->setFlashdata('pesan', 'Blog berhasil dihapus');
        return redirect()->to('/admin');
    }

    public function edit($slug)
    {
        $data = [
            'validation' => session('validation') ?? \Config\Services::validation(),
            'blog' => $this->blogModel->asArray()->where('slug', $slug)->first()
        ];

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $blogLama = $this->blogModel->getBlog($this->request->getVar('slug'));

        $rule_judul = ($blogLama['judul'] == $this->request->getVar('judul'))
            ? 'required'
            : 'required|is_unique[blog.judul]';

        // Validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'gambar' => [
                'rules' => 'is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => '{field} harus berupa gambar',
                    'mime_in' => '{field} harus berformat JPG, JPEG, atau PNG'
                ]
            ],
            'konten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        // Proses upload gambar
        $fileGambar = $this->request->getFile('gambar');
        $namaGambar = $fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()
            ? $fileGambar->getRandomName()
            : $this->request->getVar('gambarLama');

        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $fileGambar->move(ROOTPATH . 'public/assets/gambar/', $namaGambar);
            // Hapus gambar lama
            $blog = $this->blogModel->find($id);
            if ($blog['gambar'] != 'default.jpg') {
                $path = FCPATH . 'assets/gambar/' . $blog['gambar'];
                if (file_exists($path) && is_file($path)) {
                    unlink($path);
                }
            }
        }

        // Update data blog
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $data = [
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'gambar' => $namaGambar,
            'konten' => $this->request->getVar('konten')
        ];

        // Cek perubahan
        $adaPerubahan = false;
        foreach ($data as $key => $value) {
            if ($blogLama[$key] != $value) {
                $adaPerubahan = true;
                break;
            }
        }

        if ($adaPerubahan) {
            $this->blogModel->update($id, $data);
            session()->setFlashdata('pesan', 'Blog berhasil diperbarui');
        } else {
            session()->setFlashdata('pesan', 'Tidak ada perubahan data Blog');
        }
        return redirect()->to('/admin');
    }
}
