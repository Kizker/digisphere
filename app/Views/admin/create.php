<!doctype html>
<html class="no-js" lang="id">

<!-- head -->
<?= $this->include('layouts/head'); ?>

<body>
  <section class="banner-area bg-padding position-relative">
    <div class="banner__background-wrap">
      <div class="background" data-background="/assets/img/bg/gradient_bg01.png"></div>
      <div class="logo-wrapper text-center">
        <div class="logo d-inline-block mt-4">
          <a href='/' class="light-logo">
            <img src="/assets/img/logo/digisphere-light.svg" alt="DigiSphere">
          </a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-8">
          <div class="banner__content p-4 shadow rounded bg-white">

            <h2 class="text-center mb-4">Form Blog</h2>

            <form id="blogForm" enctype="multipart/form-data" action="<?= base_url('admin/save') ?>" method="post">
              <?= csrf_field(); ?>

              <div class="form-group mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control <?= session('errors.judul') ? 'is-invalid' : ''; ?>" id="judul" name="judul" placeholder="Masukkan judul blog" value="<?= old('judul'); ?>" autofocus>
                <div class="invalid-feedback">
                  <?= session('errors.judul'); ?>
                </div>
              </div>


              <div class="form-group mb-3">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="slug-otomatis-dari-judul" value="<?= old('slug'); ?>" readonly>
              </div>

              <div class="form-group mb-3">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control <?= session('errors.penulis') ? 'is-invalid' : ''; ?>" id="penulis" name="penulis" placeholder="Nama penulis" value="<?= old('penulis'); ?>">
                <div class="invalid-feedback">
                  <?= session('errors.penulis'); ?>
                </div>
              </div>

              <!-- Upload Gambar -->
              <div class="form-group mb-3">
                <label for="gambar">Upload Gambar</label>
                <div class="row mb-3 align-items-center">
                  <div class="col-sm-2">
                    <img src="/assets/gambar/default.jpg" class="img-thumbnail img-preview" id="preview-img">
                  </div>
                  <div class="col-sm-10">
                    <input type="file" class="form-control custom-file-label <?= session('errors.gambar') ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                    <div class="invalid-feedback">
                      <?= session('errors.gambar') ?>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group mb-3">
                <label for="konten">Konten</label>
                <textarea class="form-control <?= session('errors.konten') ? 'is-invalid' : ''; ?>" id="konten" name="konten" rows="6" placeholder="Isi konten blog..."><?= old('konten'); ?></textarea>
                <div class="invalid-feedback">
                  <?= session('errors.konten'); ?>
                </div>
              </div>

              <!-- Tombol Aksi -->
              <div class="d-flex justify-content-between mt-4">
                <a href="/admin" class="btn gradient-btn">Kembali</a>
                <button type="submit" class="btn gradient-btn"><span>Simpan Blog</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- scripts -->
  <?= $this->include('layouts/scripts'); ?>

  <!-- Script Form -->
  <script>
    $(document).ready(function() {

      // Slug otomatis dari judul
      $('#judul').on('input', function() {
        const slug = $(this).val().toLowerCase()
          .replace(/[^\w\s]/g, '')
          .replace(/\s+/g, '-');
        $('#slug').val(slug);
      });
    });

    function previewImg() {
      const sampul = document.querySelector('#gambar');
      const sampulGambar = document.querySelector('.custom-file-label');
      const imgPreview = document.querySelector('.img-preview');

      sampulGambar.textContent = sampul.files[0].name;

      const fileGambar = new FileReader();
      fileGambar.readAsDataURL(sampul.files[0]);

      fileGambar.onload = function(e) {
        imgPreview.src = e.target.result;
      }
    }
  </script>


</body>

</html>