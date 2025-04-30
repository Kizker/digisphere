<!doctype html>
<html class="no-js" lang="id">

<!-- head -->
<?= $this->include('layouts/head'); ?>

<style>
  .custom-table {
    width: 100%;
    table-layout: auto;
  }

  .content-cell {
    max-width: 300px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }

  .sidebar {
    width: 250px;
    min-height: 100vh;
  }

  .table-responsive {
    overflow-x: auto;
  }

  .btn-icon {
    background-color: #7a00ff;
    color: white;
    border: none;
    padding: 6px 10px;
    border-radius: 6px;
    transition: 0.3s ease;
  }

  .btn-icon:hover {
    background-color: #5600b8;
  }
</style>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3 sidebar">
      <nav class="tgmenu__nav">
        <div class="logo mb-4">
          <a href='/' class="light-logo">
            <img src="/assets/img/logo/digisphere-dark.svg" alt="DigiSphere">
          </a>
        </div>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a class="nav-link text-white" href="/"><i class="fas fa-home me-2"></i>Beranda</a>
          </li>
          <li class="nav-item mb-2">
            <a class="nav-link text-white active" href="/blog"><i class="fas fa-blog me-2"></i>Blog</a>
          </li>
          <li class="nav-item mt-4">
            <a class="btn gradient-btn" href="/logout"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- Page Content -->
    <div class="flex-grow-1 p-4">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Dashboard Blog</h2>
        <!-- <div>
          <span class="me-3">Halo, <strong></strong></span>
        </div> -->
      </div>
      <div class="row">
        <div class=" col-6 mb-3 sidebar-search-form position-relative">
          <form action="/admin" method="post">
            <input type="text" placeholder="Search" name="keyword">
            <button type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
      </div>

      <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif ?>

      <div class="mb-3">
        <a href="/create" class="btn gradient-btn"><i class="fas fa-plus me-2"></i>Buat Blog Baru</a>
      </div>

      <!-- Tabel Blog -->
      <div class="table-responsive mt-4">
        <table class="table custom-table">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Penulis</th>
              <th>Gambar</th>
              <th>Konten</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1 + (3 * ($currentPage - 1)); ?>
            <?php $counter = 0;
            // Membalik urutan data agar yang terbaru tampil pertama
            $blog = array_reverse($blog);
            foreach ($blog as $b): ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $b['judul']; ?></td>
                <td><?= $b['penulis']; ?></td>
                <td>
                  <img src="/assets/gambar/<?= $b['gambar']; ?>" alt="gambar" width="50" class="rounded">
                </td>
                <td class="content-cell"><?= $b['konten']; ?></td>
                <td>
                  <div class="d-flex justify-content-center gap-2">
                    <a href="/admin/detail/<?= $b['slug']; ?>" class="btn-icon" title="Detail"><i class="fas fa-eye"></i></a>
                    <a href="/admin/edit/<?= $b['slug']; ?>" class="btn-icon" title="Edit"><i class="fas fa-edit"></i></a>
                    <form action="/admin/delete/<?= $b['id']; ?>" method="post">
                      <?= csrf_field(); ?>
                      <input type="hidden" name="_method" value="DELETE">
                      <button class="btn-icon" title="Hapus" onclick="return confirm('Apakah anda yakin ?')"><i class="fas fa-trash-alt"></i></button>
                    </form>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="pagination" style="display: flex; justify-content: center;">
          <?= $pager->links('blog', 'blog_page') ?>
        </div>

      </div>
    </div>
  </div>

  <!-- scripts -->
  <?= $this->include('layouts/scripts'); ?>
</body>

</html>