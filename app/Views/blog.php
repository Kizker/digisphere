<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DigiSphere | Blog</title>
    <meta name="description" content="DigiSphere | Blog">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
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
                                        <li class="menu-item-has-children"><a href='/'>Beranda</a></li>
                                        <li><a href="#about" class="section-link">Tentang</a></li>
                                        <li><a href="#portofolio" class="section-link">Portofolio</a></li>
                                        <li><a href="#project" class="section-link">Project</a></li>
                                        <li><a href="#dokumentasi" class="section-link">Dokumentasi</a></li>
                                        <li class="active menu-item-has-children"><a href='/blog'>Blog</a>
                                            <ul class="sub-menu">
                                                <li class="active"><a href='/blog'>Our Blog</a></li>
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
                                    <!--Menu di sini akan muncul secara otomatis melalui Javascript / Menu yang sama seperti di Header-->
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
    <main class="fix">

        <!-- gradient-position -->
        <div class="gradient-position">
            <img src="assets/img/others/gradient-circle.svg" style="left: -4%; top: -4%" width="500" alt="circle">
            <img src="assets/img/others/gradient-circle.svg" style="right: -4%; bottom: -4%" width="500" alt="circle">
        </div>
        <!-- gradient-position-end -->

        <div class="banner__background-wrap z-index-minus">
            <div class="background" data-background="assets/img/bg/gradient_bg01.png"></div>
        </div>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Blog Terbaru</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->
        <section class="blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_post01.jpg" alt="img"></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-user"></i><a href="blog.html">Artwork</a></li>
                                        <li><i class="far fa-calendar-alt"></i> 28 Sept 2024</li>
                                        <li><i class="far fa-comments"></i><a href="#">3 Comments</a></li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="blog-details.html">Minimal workspace for inspiration</a></h2>
                                <p>Repellendus quasi sapiente dolorem veniam corporis cumque laboriosam nisi eaque earum, soluta ex nemo rerum velit. consequatur amet aliquam nesciunt nemo, deserunt facilis. Duis aute irure dolor voluptate velit esse cillum dolore fugiat nulla pariatur.</p>
                            </div>
                        </div>
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_post02.jpg" alt="img"></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-user"></i><a href="blog.html">Artwork</a></li>
                                        <li><i class="far fa-calendar-alt"></i> 28 Sept 2024</li>
                                        <li><i class="far fa-comments"></i><a href="#">3 Comments</a></li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="blog-details.html">Delbo release NFT for Justice Charity</a></h2>
                                <p>Repellendus quasi sapiente dolorem veniam corporis cumque laboriosam nisi eaque earum, soluta ex nemo rerum velit. consequatur amet aliquam nesciunt nemo, deserunt facilis. Duis aute irure dolor voluptate velit esse cillum dolore fugiat nulla pariatur.</p>
                            </div>
                        </div>
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_post03.jpg" alt="img"></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-user"></i><a href="blog.html">Artwork</a></li>
                                        <li><i class="far fa-calendar-alt"></i> 28 Sept 2024</li>
                                        <li><i class="far fa-comments"></i><a href="#">3 Comments</a></li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="blog-details.html">Morning routine to boost your mood</a></h2>
                                <p>Repellendus quasi sapiente dolorem veniam corporis cumque laboriosam nisi eaque earum, soluta ex nemo rerum velit. consequatur amet aliquam nesciunt nemo, deserunt facilis. Duis aute irure dolor voluptate velit esse cillum dolore fugiat nulla pariatur.</p>
                            </div>
                        </div>
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog_post04.jpg" alt="img"></a>
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-user"></i><a href="blog.html">Artwork</a></li>
                                        <li><i class="far fa-calendar-alt"></i> 28 Sept 2024</li>
                                        <li><i class="far fa-comments"></i><a href="#">3 Comments</a></li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="blog-details.html">Wash Trading and safe trading practices guide</a></h2>
                                <p>Repellendus quasi sapiente dolorem veniam corporis cumque laboriosam nisi eaque earum, soluta ex nemo rerum velit. consequatur amet aliquam nesciunt nemo, deserunt facilis. Duis aute irure dolor voluptate velit esse cillum dolore fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <aside class="blog-sidebar">
                            <div class="widget">
                                <h3 class="widget-title">Search Here</h3>
                                <div class="sidebar-search-form position-relative">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>
                                <ul>
                                    <li><a href="#">Forensic science</a><span class="float-right">12</span></li>
                                    <li><a href="#">Gemological</a><span class="float-right">16</span></li>
                                    <li><a href="#">UI/UX Deisgn</a><span class="float-right">14</span></li>
                                    <li><a href="#">Uncategorized</a><span class="float-right">29</span></li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h3 class="widget-title">Postingan Terbaru</h3>
                                <div class="rc-post-wrap">
                                    <div class="rc-post-item">
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="assets/img/blog/blog_post06.jpg" alt="img"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <span class="date"><i class="far fa-calendar-alt"></i> October 27, 2024</span>
                                            <h5 class="title"><a href="blog-details.html">New Trends In UI/UX Design World</a></h5>
                                        </div>
                                    </div>
                                    <div class="rc-post-item">
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="assets/img/blog/blog_post05.jpg" alt="img"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <span class="date"><i class="far fa-calendar-alt"></i> October 27, 2024</span>
                                            <h5 class="title"><a href="blog-details.html">That Time We Burned Players</a></h5>
                                        </div>
                                    </div>
                                    <div class="rc-post-item">
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="assets/img/blog/blog_post04.jpg" alt="img"></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <span class="date"><i class="far fa-calendar-alt"></i> October 27, 2024</span>
                                            <h5 class="title"><a href="blog-details.html">Morning routine boost to your mood</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget_categories">
                                <h3 class="widget-title">Popular Tag</h3>
                                <div class="tagcloud">
                                    <a href="#">apps</a>
                                    <a href="#">NFT</a>
                                    <a href="#">Blockchain</a>
                                    <a href="#">Digital</a>
                                    <a href="#">Art</a>
                                    <a href="#">Backend</a>
                                    <a href="#">website</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

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
                                        <a href="#" class="scroll-to-target" data-target="html"><i class="flaticon-arrowhead-up"></i></a>
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
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/anime.min.js"></script>
    <script src="assets/js/anime-helper.js"></script>
    <script src="assets/js/anime-helper-defined-timelines.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>