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

            <h2 class="text-center mb-4">Detail Blog</h2>
            <form id="detailForm">

              <div class="form-group mb-3">
                <label for="judul">Judul</label>
                <p type="text" class="form-control" id="judul" readonly><?= $blog['judul']; ?></p>
              </div>

              <div class="form-group mb-3">
                <label for="slug">Slug</label>
                <p type="text" class="form-control" id="slug" readonly><?= $blog['slug']; ?></p>
              </div>

              <div class="form-group mb-3">
                <label for="penulis">Penulis</label>
                <p type="text" class="form-control" id="penulis" readonly><?= $blog['penulis']; ?></p>
              </div>

              <!-- Gambar -->
              <div class="form-group mb-3">
                <label for="gambar">Gambar</label>
                <br>
                <img id="gambarPreview" src="/assets/gambar/<?= $blog['gambar']; ?>" alt="Gambar Blog" class="img-fluid rounded shadow-sm" style="max-height: 300px;">
              </div>

              <div class="form-group mb-3">
                <label for="konten">Konten</label>
                <textarea class="form-control" id="konten" rows="6" readonly><?= $blog['konten']; ?></textarea>
              </div>

              <div class="form-group mb-3">
                <label for="created_at">Dibuat Pada</label>
                <p type="text" class="form-control" id="created_at" readonly><?= $blog['created_at']; ?></p>
              </div>

              <div class="form-group mb-4">
                <label for="updated_at">Diperbarui Pada</label>
                <p type="text" class="form-control" id="updated_at" readonly><?= $blog['updated_at']; ?></p>
              </div>

              <!-- Tombol Kembali -->
              <div class="text-center mt-4">
                <a href="/admin" class="btn gradient-btn">Kembali</a>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- scripts -->
  <?= $this->include('layouts/scripts'); ?>
</body>

</html>