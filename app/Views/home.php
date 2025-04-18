<!doctype html>
<html class="no-js" lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DigiSphere | Website dunia teknologi digital dan wawasan pribadi</title>
    <meta name="description" content="DigiSphere | Website dunia teknologi digital dan wawasan pribadi">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <!-- Tempatkan ikon.ico di direktori root -->

    <!-- CSS disini -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/default-icons.css">
    <link rel="stylesheet" href="/assets/css/unicons.css">
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/spacing.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <!-- Halaman-Pengungkap -->
    <script src="/assets/js/tg-page-head.js"></script>
</head>

<body>


    <!-- Gelap/Terang-beralih -->
    <div class="darkmode-trigger">
        <label class="modeSwitch">
            <input type="checkbox">
            <span class="icon"></span>
        </label>
    </div>
    <!-- Gelap/Terang-beralih-end -->


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
                                        <li class="active menu-item-has-children"><a href="#home" class="section-link">Beranda</a></li>
                                        <li><a href="#about" class="section-link">Tentang</a></li>
                                        <li><a href="#portofolio" class="section-link">Portofolio</a></li>
                                        <li><a href="#project" class="section-link">Project</a></li>
                                        <li><a href="#dokumentasi" class="section-link">Dokumentasi</a></li>
                                        <li class="menu-item-has-children"><a href='/blog'>Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href='/blog'>Our Blog</a></li>
                                                <li><a href='/blog-details'>Blog Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="header-social">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                                            <a href="#" class="d-blcok d-xl-none" data-bs-toggle="modal" data-bs-target="#connectModal"><i class="fas fa-wallet"></i></a>
                                        </li>
                                        <li class="header-btn"><button class="btn border-btn" data-bs-toggle="modal" data-bs-target="#connectModal">Connect wallet</button></li>
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

        <!-- Connect Wallet Modal -->
        <div class="connect__modal">
            <div class="modal fade" id="connectModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal__wrapper">
                            <div class="modal__header">
                                <h2 class="title">Connect Wallet</h2>
                                <button data-bs-dismiss="modal" aria-label="Close">
                                    <i class="flaticon-close-1"></i>
                                </button>
                            </div>
                            <div class="modal__body text-center">
                                <p>Please select a wallet to connect for start Minting your NFTs</p>
                                <div class="connect__section">
                                    <ul class="list-wrap">
                                        <li>
                                            <a href="#" class="connect-meta"><img src="assets/img/icons/metamask.svg" alt="Metamask">MetaMask</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/icons/bitgo.svg" alt="BitGo">BitGo</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/icons/trust.svg" alt="Trust">Trust Wallet</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="assets/img/icons/coinbase.svg" alt="Coinbase">Coinbase</a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="privacy-text">By connecting your wallet, you agree to our <a href="#">Terms of Service</a> and our <a href="#">Privacy Policy</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Connect Wallet Modal -->
    </header>
    <!-- header-area-end -->


    <!-- main-area -->
    <main id="home" class="fix">

        <!-- gradient-position -->
        <div class="gradient-position">
            <img src="assets/img/others/gradient-circle.svg" style="left: -4%; top: -4%" width="500" alt="circle">
            <img src="assets/img/others/gradient-circle.svg" style="right: -4%; bottom: -4%" width="500" alt="circle">
        </div>
        <!-- gradient-position-end -->

        <!-- beranda-area -->
        <section class="banner-area banner-padding position-relative">
            <div class="banner__background-wrap">
                <div class="background" data-background="assets/img/bg/gradient_bg01.png"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner__content" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">
                            <img src="assets/img/objects/ethereum-01.png" width="44" alt="object" style="top: -25%; left: 38%" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 400;">
                            <img src="assets/img/objects/circle-01.png" width="16" alt="object" style="top: 14%; left: -12%" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 420;">
                            <img src="assets/img/objects/circle-03.png" width="24" alt="object" style="bottom: -16%; left: 12%" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 440;">

                            <h2 class="title">Andricha Dea Mitra</h2>
                            <p class="desc">Website dunia teknologi digital dan wawasan pribadi.</p>
                            <a href="#" target="_blank" class="banner__btn btn gradient-btn"><span>Lebih Lanjut</span> <i class="unicon-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner__images" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 200;">
                            <img src="assets/img/objects/bitcoin-01.png" width="44" class="shape" alt="object" style="top: 67%; left: -21%" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 460;">

                            <img src="assets/img/objects/x.png" width="28" class="shape" alt="object" style="top: -4%; right: 16%" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 480;">

                            <img class="shape dashed-line has-active-light" width="300" src="assets/img/others/blob-dashed.svg" alt="Blog dashed" style="top: -10%; right: 17%; fill: transparent; opacity: .1;">

                            <img class="shape dashed-line has-active-dark" width="300" src="assets/img/others/blob-dashed-light.svg" alt="Blog dashed" style="top: -10%; right: 17%; fill: transparent; opacity: .1;">

                            <svg style="top: -17%; opacity: .3;" class="shape" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#F796FF" d="M47.5,-67.2C55.9,-59.3,53.2,-37.9,56.7,-20.1C60.2,-2.3,69.9,11.8,70.8,27.3C71.7,42.9,63.8,59.9,50.6,64.4C37.3,68.9,18.6,60.8,-0.3,61.2C-19.3,61.6,-38.6,70.7,-53.5,66.7C-68.4,62.8,-78.9,45.9,-78.8,29.5C-78.7,13.2,-67.9,-2.7,-59.8,-16.8C-51.6,-31,-46,-43.3,-36.5,-50.9C-27,-58.4,-13.5,-61.1,3,-65.2C19.6,-69.4,39.1,-75.1,47.5,-67.2Z" transform="translate(100 100)">
                            </svg>

                            <div class="banner__images-grid">
                                <div class="left"><img src="assets/img/artwork/05.jpg" alt="artwork"></div>
                                <div class="right"><img src="assets/img/artwork/13.jpg" alt="artwork"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- beranda-area-end -->

        <!-- brand-area -->
        <div class="brand-area section-pb-65" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 300;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-12">
                        <h6 class="brand__title">TOOLS SKILLS :</h6>
                        <div class="brand__list">
                            <div class="brand__item">
                                <img src="assets/img/tools/tools-skills.svg" class="has-active-light" alt="brand">
                                <img src="assets/img/tools/tools-skills.svg" class="has-active-dark" alt="brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- section-divider -->
        <div class="section-divider" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 100;">
            <img src="assets/img/others/divider-01.svg" alt="divider">
        </div>
        <!-- section-divider-end -->

        <!-- tentang-area -->
        <section id="about" class="about-area section-pt-70 section-pb-80">
            <div class="container">
                <div class="row justify-content-center" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section__title text-center title-mb-80">
                            <h2 class="title">Tentang Saya</h2>
                        </div>
                    </div>
                </div>
                <div class="about__row-reverse">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about__img" data-anime="opacity:[0, 1]; translateX:[-24, 0]; onview: -250; delay: 200;">
                                <img src="assets/img/others/features-03.png" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about__content" data-anime="opacity:[0, 1]; translateX:[24, 0]; onview: -250; delay: 300;">
                                <div class="section__title text-start">
                                    <span class="sub-title tg-text-gradient">Tentang Saya</span>
                                    <h2 class="title">Andricha Dea<br> Mitra</h2>
                                </div>
                                <p>Saya sedang menempuh kuliah di Universitas Lampung jurusan Pendidikan MIPA, program studi Pendidikan Teknologi Informasi, dengan minat khusus di bidang Teknologi Digital.</p>
                                <div class="about__facts-list">
                                    <div class="about__fact-item">
                                        <p>Kelahiran</p>
                                        <h3 class="count">18 02 03</h3>
                                    </div>
                                    <div class="about__fact-item">
                                        <p>Umur</p>
                                        <h3 class="count">22 Tahun</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about__img" data-anime="opacity:[0, 1]; translateX:[24, 0]; onview: -250; delay: 300;">
                                <img src="assets/img/others/features-02.png" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about__content" data-anime="opacity:[0, 1]; translateX:[-24, 0]; onview: -250; delay: 400;">
                                <div class="section__title text-start">
                                    <span class="sub-title tg-text-gradient">Riwayat Pedidikan</span>
                                    <h2 class="title">SD</h2>
                                </div>
                                <p>SD Negeri 36 Ogan Komering Ulu</p>
                                <div class="section__title text-start">
                                    <h2 class="title">SMP</h2>
                                </div>
                                <p>SMP Negeri 03 Ogan Komering Ulu</p>
                                <div class="section__title text-start">
                                    <h2 class="title">SMA</h2>
                                </div>
                                <p>SMP Negeri 02 Ogan Komering Ulu</p>
                                <div class="section__title text-start">
                                    <h2 class="title">Univ</h2>
                                </div>
                                <p>Univeristas Lampung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- tentang-area-end -->

        <!-- section-divider -->
        <div class="section-divider" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">
            <img src="assets/img/others/divider-01.svg" alt="divider">
        </div>
        <!-- section-divider-end -->

        <!-- portofolio-area -->
        <section id="portofolio" class="mint-area section-pt-80 section-pb-50">
            <div class="container">
                <div class="row justify-content-center" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 200;">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section__title text-center title-mb-80">
                            <h2 class="title">Portofolio</h2>
                        </div>
                    </div>
                </div>
                <div class="mint__lits-wrapper" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 300;">
                    <img class="shape" width="16" src="assets/img/objects/circle-01.png" alt="Object" style="top: -16%; left: 8%">

                    <img class="shape" width="24" src="assets/img/objects/circle-02.png" alt="Object" style="bottom: 16%; right: -8%">

                    <img class="shape" width="28" src="assets/img/objects/x.png" alt="Object" style="bottom: 16%; left: -8%">

                    <div class="row justify-content-center" data-anime="targets: > *; opacity:[0, 1]; translateY:[24, 0]; onview: -250; delay: anime.stagger(100);">
                        <div class="col-md-6 col-sm-9">
                            <div class="mint__item">
                                <div class="mint__icon">
                                    <img src="assets/img/icons/mint-01.png" alt="icon">
                                </div>
                                <div class="mint__content">
                                    <h3 class="title">Desain Grafis UKM Kristen Unila</h3>
                                    <p class="desc">Tim Multimedia Bagian Desain Grafis UKM Kristen Unila (2023 - 2024)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-9">
                            <div class="mint__item">
                                <div class="mint__icon">
                                    <img src="assets/img/icons/mint-02.png" alt="icon">
                                </div>
                                <div class="mint__content">
                                    <h3 class="title">Ketua Divisi Media dan Informasi</h3>
                                    <p class="desc">Ketua Divisi Media dan Informasi Formatif FKIP Unila (2024)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-9">
                            <div class="mint__item">
                                <div class="mint__icon">
                                    <img src="assets/img/icons/mint-03.png" alt="icon">
                                </div>
                                <div class="mint__content">
                                    <h3 class="title">Desain Grafis Nusadaya Academy</h3>
                                    <p class="desc">Desain Grafis - Digital Marketing pada Nusadaya Academy (2024)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-9">
                            <div class="mint__item">
                                <div class="mint__icon">
                                    <img src="assets/img/icons/mint-04.png" alt="icon">
                                </div>
                                <div class="mint__content">
                                    <h3 class="title">Desainer Grafis Freelance</h3>
                                    <p class="desc">Desainer Grafis Freelance (2023 - Saat Ini)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portofolio-area-end -->

        <!-- section-divider -->
        <div class="section-divider" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 100;">
            <img src="assets/img/others/divider-01.svg" alt="divider">
        </div>
        <!-- section-divider-end -->

        <!-- project-area -->
        <section id="project" class="roadmap-area section-pt-60 section-pb-60">
            <div class="container">
                <div class="row justify-content-center" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 100;">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section__title text-center title-mb-75">
                            <h2 class="title">Project Saya</h2>
                        </div>
                    </div>
                </div>
                <div class="roadmap__wrapper" data-anime="opacity:[0, 1]; translateY:[24, 0]; onview: true; delay: 200;">
                    <div class="swiper roadmap__active">
                        <div class="swiper-wrapper" data-anime="targets: > * > *; opacity:[0, 1]; scale:[0.5, 1]; onview: -400; delay: anime.stagger(200);">
                            <div class="swiper-slide">
                                <div class="roadmap__card">
                                    <div class="roadmap__step">
                                        <span class="tg-text-gradient d-inline-flex">Project 01</span>
                                    </div>
                                    <h3 class="roadmap__heading">Web PTI FKIP Unila</h3>
                                    <a href="https://pti.fkip.unila.ac.id/">pti.fkip.unila.ac.id</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="roadmap__card">
                                    <div class="roadmap__step">
                                        <span class="tg-text-gradient d-inline-flex">Project 02</span>
                                    </div>
                                    <h3 class="roadmap__heading">Web Desa Jaya Murni</h3>
                                    <a href="https://tiyuhjayamurni.com/">tiyuhjayamurni.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="tg-swiper-scrollbar"></div>

                    <!-- Navigation -->
                    <a aria-label="Prev" href="#prev" class="tg-swiper-prev"><i class="fas fa-chevron-left"></i></a>
                    <a aria-label="Next" href="#next" class="tg-swiper-next"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </section>
        <!-- roadmap-area-end -->

        <!-- section-divider -->
        <div class="section-divider" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 400;">
            <img src="assets/img/others/divider-01.svg" alt="divider">
        </div>
        <!-- section-divider-end -->

        <!-- dokumentasi-area -->
        <section id="dokumentasi" class="collection-area section-py-80">
            <div class="container">
                <div class="row justify-content-center" data-anime="opacity:[0, 1]; translateY:[-24, 0]; onview: true; delay: 200;">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section__title text-center title-mb-65">
                            <h2 class="title">Latest artworks</h2>
                        </div>
                    </div>
                </div>
                <div class="row collection__items-list" data-anime="targets: > * > *; opacity:[0, 1]; translateY:[48, 0]; onview: -400; delay: anime.stagger(100);">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-11">
                        <div class="collection__item">
                            <div class="collection__item-thumb">
                                <a href="#"><img src="assets/img/artwork/31.jpg" alt="img"></a>
                            </div>
                            <div class="collection__item-content">
                                <h4 class="name"><a href="#">#Feed_Design</a></h4>
                                <span class="author">By <a href="#">Andri</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-11">
                        <div class="collection__item">
                            <div class="collection__item-thumb">
                                <a href="#"><img src="assets/img/artwork/32.jpg" alt="img"></a>
                            </div>
                            <div class="collection__item-content">
                                <h4 class="name"><a href="#">#Product_Design</a></h4>
                                <span class="author">By <a href="#">Andri</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-11">
                        <div class="collection__item">
                            <div class="collection__item-thumb">
                                <a href="#"><img src="assets/img/artwork/33.jpg" alt="img"></a>
                            </div>
                            <div class="collection__item-content">
                                <h4 class="name"><a href="#">#Logo_Design</a></h4>
                                <span class="author">By <a href="#">Andri</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-11">
                        <div class="collection__item">
                            <div class="collection__item-thumb">
                                <a href="#"><img src="assets/img/artwork/34.jpg" alt="img"></a>
                            </div>
                            <div class="collection__item-content">
                                <h4 class="name"><a href="#">#Poster_Design</a></h4>
                                <span class="author">By <a href="#">Andri</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-11">
                        <div class="collection__item">
                            <div class="collection__item-thumb">
                                <a href="#"><img src="assets/img/artwork/35.jpg" alt="img"></a>
                            </div>
                            <div class="collection__item-content">
                                <h4 class="name"><a href="#">#Elemen_Design</a></h4>
                                <span class="author">By <a href="#">Andri</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-11">
                        <div class="collection__item">
                            <div class="collection__item-thumb">
                                <a href="#"><img src="assets/img/artwork/36.jpg" alt="img"></a>
                            </div>
                            <div class="collection__item-content">
                                <h4 class="name"><a href="#">#Cover_Book</a></h4>
                                <span class="author">By <a href="#">Andri</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-11">
                        <div class="collection__item">
                            <div class="collection__item-thumb">
                                <a href="#"><img src="assets/img/artwork/37.jpg" alt="img"></a>
                            </div>
                            <div class="collection__item-content">
                                <h4 class="name"><a href="#">#UI/UX_Design</a></h4>
                                <span class="author">By <a href="#">Andri</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-11">
                        <div class="collection__item">
                            <div class="collection__item-thumb">
                                <a href="#"><img src="assets/img/artwork/38.jpg" alt="img"></a>
                            </div>
                            <div class="collection__item-content">
                                <h4 class="name"><a href="#">#Design_Video</a></h4>
                                <span class="author">By <a href="#">Andri</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- dokumetasi-area-end -->

        <!-- section-divider -->
        <div class="section-divider" data-anime="opacity:[0, 1]; scale:[0, 1]; onview: true; delay: 400;">
            <img src="assets/img/others/divider-01.svg" alt="divider">
        </div>
        <!-- section-divider-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer class="footer-area section-py-80">
        <div class="container">
            <div class="footer__wrapper">
                <img src="assets/img/objects/ethereum-01.png" width="32" alt="object" style="top: 32%; left: 16%">
                <img src="assets/img/objects/x.png" width="16" alt="object" style="top: 8%; right: 16%">
                <img src="assets/img/objects/circle-01.png" width="16" alt="object" style="bottom: 24%; right: 40%">
                <img src="assets/img/objects/circle-03.png" width="24" alt="object" style="bottom: -8%; left: 30%">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7 col-md-9 col-sm-11">
                        <div class="footer__info text-center">
                            <div class="logo">
                                <a href='/' class="light-logo">
                                    <img src="assets/img/logo/digisphere-light.svg" alt="DigiSphere">
                                </a>
                                <a href='/' class="dark-logo">
                                    <img src="assets/img/logo/digisphere-dark.svg" alt="DigiSphere">
                                </a>
                            </div>
                            <p>Website dunia teknologi digital dan wawasan pribadi.</p>
                            <ul class="list-wrap footer__social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copyright__wrapper">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright__text">
                                <p>&copy; 2025 Andricha Dea Mitra. All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="copyright__menu">
                                <ul class="list-wrap">
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Terms of use</a></li>
                                    <li class="backTop">
                                        <a href="javascript:void(0)" class="scroll-to-target" data-target="html"><i class="flaticon-arrowhead-up"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->



    <!-- JS here -->
    <script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <script src="/assets/js/jquery.easing.js"></script>
    <script src="/assets/js/anime.min.js"></script>
    <script src="/assets/js/anime-helper.js"></script>
    <script src="/assets/js/anime-helper-defined-timelines.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>