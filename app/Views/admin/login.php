<!doctype html>
<html class="no-js" lang="id">

<!-- head -->
<?= $this->include('layouts/head'); ?>

<body>
  <!-- Area Login -->
  <section class="banner-area bg-padding position-relative">
    <div class="banner__background-wrap">
      <div class="background" data-background="/assets/img/bg/gradient_bg01.png"></div>
    </div>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-5">
          <div class="banner__content p-4 shadow">
            <h1 class="text-center mb-3">Selamat Datang!</h1>
            <p class="text-center mb-4">Silakan login ke akun DigiSphere Anda</p>
            <?php if (session()->getFlashdata('error')) : ?>
              <div class="alert alert-danger text-center">
                <?= session()->getFlashdata('error') ?>
              </div>
            <?php endif; ?>
            <form id="loginForm" method="post" action="/login/auth">
              <div class="form-group mb-3">
                <label for="identifier">Username atau Email</label>
                <input type="text" class="form-control" id="identifier" name="username" placeholder="Masukkan username atau email" required>
              </div>
              <div class="form-group mb-3">
                <label for="password">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                  <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                    <i class="fas fa-eye" id="eyeIcon"></i>
                  </span>
                </div>
              </div>
              <div class="text-center mb-3">
                <button type="submit" class="btn gradient-btn"><span>Login</span></button>
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
    document.getElementById('togglePassword').addEventListener('click', function() {
      const passwordInput = document.getElementById('password');
      const icon = document.getElementById('eyeIcon');

      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        passwordInput.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    });
  </script>
</body>

</html>