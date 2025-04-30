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

            <h2 class="text-center mb-4">Kelola Blog</h2>

            <form id="blogForm" enctype="multipart/form-data" action="/admin/update/<?= $blog['id']; ?>" method="post">
              <?= csrf_field(); ?>

              <input type="hidden" name="gambarLama" value="<?= $blog['gambar']; ?>">

              <div class="form-group mb-3">
                <label for="judul">Judul</label>
                <input type="text" class="form-control <?= session('errors.judul') ? 'is-invalid' : ''; ?>" id="judul" name="judul" placeholder="Masukkan judul blog" value="<?= $blog['judul']; ?>" autofocus>
                <div class="invalid-feedback">
                  <?= session('errors.judul'); ?>
                </div>
              </div>

              <div class="form-group mb-3">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" name="slug" placeholder="slug-otomatis-dari-judul" value="<?= $blog['slug']; ?>" readonly>
                <div class="invalid-feedback">
                  <?= session('errors.judul'); ?>
                </div>
              </div>

              <div class="form-group mb-3">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control <?= session('errors.penulis') ? 'is-invalid' : ''; ?>" id="penulis" name="penulis" placeholder="Nama penulis" value="<?= $blog['penulis']; ?>">
                <div class="invalid-feedback">
                  <?= session('errors.penulis'); ?>
                </div>
              </div>

              <!-- Upload Gambar -->
              <div class="form-group mb-3">
                <label for="gambar">Upload Gambar</label>
                <div class="row mb-3 align-items-center">
                  <div class="col-sm-2">
                    <!-- Gambar preview -->
                    <img src="/assets/gambar/<?= old('gambar') ?? $blog['gambar']; ?>" class="img-thumbnail img-preview" id="preview-img">
                  </div>
                  <div class="col-sm-10">
                    <div class="custom-file">
                      <input type="file" class="form-control <?= session('errors.gambar') ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                      <label name class="form-text text-muted mt-1 visually-hidden" id="file-label"><?= $blog['gambar']; ?></label>
                      <div class="invalid-feedback">
                        <?= session('errors.gambar') ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="form-group mb-3">
                <label for="konten">Konten</label>
                <textarea class="form-control <?= session('errors.konten') ? 'is-invalid' : ''; ?>" id="konten" name="konten" rows="6" placeholder="Isi konten blog..."><?= $blog['konten']; ?></textarea>
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

  <script>
    $(document).ready(function() {
      // Auto generate tanggal
      const now = new Date().toISOString().slice(0, 19).replace('T', ' ');
      $('#updated_at').val(now);

      // Slug otomatis dari judul
      // $('#judul').on('input', function() {
      //   const slug = $(this).val().toLowerCase()
      //     .replace(/[^\w\s]/g, '')
      //     .replace(/\s+/g, '-');
      //   $('#slug').val(slug);
      // });
    });

    function previewImg() {
      const gambar = document.getElementById('gambar');
      const label = document.getElementById('file-label');
      const preview = document.getElementById('preview-img');

      // Update label dengan nama file baru
      if (gambar.files.length > 0) {
        label.textContent = gambar.files[0].name;

        // Preview gambar
        const fileReader = new FileReader();
        fileReader.readAsDataURL(gambar.files[0]);
        fileReader.onload = function(e) {
          preview.src = e.target.result;
        };
      }
    }
  </script>
</body>

</html>