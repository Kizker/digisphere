<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Pages extends BaseController
{
    protected $blogModel;
    public function __construct()
    {
        $this->blogModel = new BlogModel();
    }

    public function index()
    {
        return view('home');
    }
    public function blog()
    {
        $currentPage = $this->request->getVar('page_blog') ?? 1;
        $keyword = $this->request->getVar('keyword');  // Ambil keyword pencarian dari query string

        if ($keyword) {
            // Panggil model untuk mencari data berdasarkan keyword
            $blog = $this->blogModel->search($keyword);
        } else {
            // Jika tidak ada keyword, ambil semua data blog
            $blog = $this->blogModel;
        }

        // Tentukan segment pagination untuk blog
        $data = [
            'blog' => $blog->paginate(10, 'blog'),  // 3 blog per halaman
            'pager' => $this->blogModel->pager,
            'currentPage' => $currentPage
        ];

        return view('blog', $data);
    }

    public function blog_details($slug)
    {
        // $blog = $this->blogModel->findAll();

        $data = [
            'blog' => $this->blogModel->getBlog($slug),
            'recent_blog' => $this->blogModel->getBlog()
        ];

        return view('blog-details', $data);
    }
}
