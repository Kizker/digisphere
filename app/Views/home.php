<!doctype html>
<html class="no-js" lang="id">

<!-- head -->
<?= $this->include('layouts/head'); ?>

<body>

    <!-- mode -->
    <?= $this->include('layouts/mode'); ?>

    <!-- header-area -->
    <header>
        <div id="sticky-header" class="tg-header__area transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mobile-nav-toggler"><i class="flaticon-menu-1"></i></div>
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo">
                                    <a href='/' class="light-logo">
                                        <img src="assets/img/logo/digisphere-light.svg" alt="DigiSphere">
                                    </a>
                                    <a href='/' class="dark-logo">
                                        <img src="assets/img/logo/digisphere-dark.svg" alt="DigiSphere">
                                    </a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                    <ul class="navigation">
                                        <li><a href="#home" class="section-link">Beranda</a></li>
                                        <li><a href="#about" class="section-link">Tentang</a></li>
                                        <li><a href="#portofolio" class="section-link">Portofolio</a></li>
                                        <li><a href="#project" class="section-link">Project</a></li>
                                        <li><a href="#dokumentasi" class="section-link">Dokumentasi</a></li>
                                        <li><a href='/blog'>Blog</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="header-social">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                                        </li>
                                        <li class="header-btn"><button class="btn border-btn" onclick="window.location.href='/login'" class="btn border-btn">Login</button></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <!-- Mobile Menu  -->
                        <div class="tgmobile__menu">
                            <nav class="tgmobile__menu-box">
                                <div class="close-btn"><i class="flaticon-close-1"></i></div>
                                <div class="nav-logo">
                                    <a href='/' class="light-logo">
                                        <img src="assets/img/logo/digisphere-light.svg" alt="DigiSphere">
                                    </a>
                                    <a href='/' class="dark-logo">
                                        <img src="assets/img/logo/digisphere-dark.svg" alt="DigiSphere">
                                    </a>
                                </div>
                                <div class="tgmobile__menu-outer">
                                    <!--Di sini Menu Akan Datang Secara Otomatis Melalui Javascript / Menu Sama seperti di Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                        <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="tgmobile__menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->

    <!-- main-area -->
    <main id="home" class="fix">

        <!-- gradient -->
        <?= $this->include('layouts/gradient'); ?>

        <!-- beranda -->
        <?= $this->include('layouts/beranda'); ?>

        <!-- brand -->
        <?= $this->include('layouts/brand'); ?>

        <!-- divider -->
        <?= $this->include('layouts/divider'); ?>

        <!-- tentang -->
        <?= $this->include('layouts/about'); ?>

        <!-- divider -->
        <?= $this->include('layouts/divider'); ?>

        <!-- portofolio -->
        <?= $this->include('layouts/portofolio'); ?>

        <!-- divider -->
        <?= $this->include('layouts/divider'); ?>

        <!-- project -->
        <?= $this->include('layouts/project'); ?>

        <!-- divider -->
        <?= $this->include('layouts/divider'); ?>

        <!-- dokumentasi -->
        <?= $this->include('layouts/dokumentasi'); ?>

        <!-- divider -->
        <?= $this->include('layouts/divider'); ?>

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <?= $this->include('layouts/footer'); ?>

    <!-- scripts -->
    <?= $this->include('layouts/scripts'); ?>
</body>

</html>