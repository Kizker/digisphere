<!doctype html>
<html class="no-js" lang="en">

<!-- head -->
<?= $this->include('layouts/head'); ?>

<body class="single single-post">


    <!-- mode -->
    <?= $this->include('layouts/mode'); ?>

    <!-- header -->
    <?= $this->include('layouts/header'); ?>


    <!-- main-area -->
    <main class="fix">

        <!-- gradient -->
        <?= $this->include('layouts/gradient'); ?>

        <div class="banner__background-wrap z-index-minus">
            <div class="background" data-background="/assets/img/bg/gradient_bg01.png"></div>
        </div>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title"><?= $blog['judul']; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area -->
        <section class="blog-area blog-details-area">
            <div class="container">
                <div class="row">

                    <!-- Isi Blog -->
                    <div class="col-lg-8">
                        <div class="blog-post-item">
                            <div class="blog-post-thumb">
                                <img src="/assets/gambar/<?= $blog['gambar']; ?>" alt="img">
                            </div>
                            <div class="blog-post-content blog-details-content">
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li><i class="far fa-user"></i><a><?= $blog['penulis']; ?></a></li>
                                        <li><i class="far fa-calendar-alt"></i><?= $blog['created_at']; ?></li>
                                    </ul>
                                </div>
                                <h2 class="title"><?= $blog['judul']; ?></h2>
                                <div class="konten-artikel">
                                    <?= nl2br($blog['konten']); ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Isi Blog End -->

                    <div class="col-lg-4">
                        <aside class="blog-sidebar">
                            <!-- Bilah Pencarian -->
                            <div class="widget">
                                <h3 class="widget-title">Search Here</h3>
                                <div class="sidebar-search-form position-relative">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <!-- Blog Terbaru -->
                            <div class="widget">
                                <h3 class="widget-title">Postingan Terbaru</h3>
                                <?php
                                $counter = 0;
                                // Membalik urutan data agar yang terbaru tampil pertama
                                $blog = array_reverse($blog);
                                foreach ($recent_blog as $b) :
                                    if ($counter >= 9) break;
                                    $counter++;
                                ?>
                                    <div class="rc-post-wrap mb-2">
                                        <div class="rc-post-item">
                                            <div class="rc-post-thumb">
                                                <a href="/blog-details/<?= $b['slug']; ?>"><img src="/assets/gambar/<?= $b['gambar']; ?>" alt="img"></a>
                                            </div>
                                            <div class="rc-post-content">
                                                <span class="date"><i class="far fa-calendar-alt"></i> October 27, 2024</span>
                                                <h5 class="title"><a href="/blog-details/<?= $b['slug']; ?>"><?= $b['judul']; ?></a></h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
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


    <!-- footer -->
    <?= $this->include('layouts/footer'); ?>

    <!-- scripts -->
    <?= $this->include('layouts/scripts'); ?>
</body>

</html>