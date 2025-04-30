<!doctype html>
<html class="no-js" lang="en">

<!-- head -->
<?= $this->include('layouts/head'); ?>

<body>
    <!-- mode -->
    <?= $this->include('layouts/mode'); ?>

    <!-- header -->
    <?= $this->include('layouts/header'); ?>

    <!-- main-area -->
    <main class="fix">

        <!-- gradient -->
        <?= $this->include('layouts/gradient'); ?>

        <div class="banner__background-wrap z-index-minus">
            <div class="background" data-background="assets/img/bg/gradient_bg01.png"></div>
        </div>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Blog Teknologi Digital</h2>
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

                        <!-- Isi Blog -->
                        <?php
                        helper('text'); // Pastikan helper ini sudah di-load
                        $i = 1 + (3 * ($currentPage - 1));
                        $blog = array_reverse($blog);
                        ?>

                        <?php foreach ($blog as $b) : ?>
                            <div class="blog-post-item">
                                <div class="blog-post-thumb">
                                    <a href="/blog-details/<?= $b['slug']; ?>"><img src="/assets/gambar/<?= $b['gambar']; ?>" alt="img"></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li><i class="far fa-user"></i><a> <?= $b['penulis']; ?></a></li>
                                            <li><i class="far fa-calendar-alt"></i> <?= date('F j, Y', strtotime($b['updated_at'])); ?></li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a href="/blog-details/<?= $b['slug']; ?>"><?= $b['judul']; ?></a></h2>
                                    <p class="konten-terpotong"><?= word_limiter(strip_tags($b['konten']), 30); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <!-- Pagination dipusatkan -->
                        <div class="d-flex justify-content-center mt-4">
                            <?= $pager->links('blog', 'blog_page') ?>
                        </div>
                        <!-- Isi Blog End -->

                    </div>
                    <div class="col-lg-4">
                        <aside class="blog-sidebar">

                            <!-- Bilah Pencarian -->
                            <div class="widget">
                                <h3 class="widget-title">Search Here</h3>
                                <div class="sidebar-search-form position-relative">
                                    <form action="/blog/search" method="get">
                                        <input type="text" placeholder="Search" name="keyword">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <!-- Blog Terbaru -->
                            <div class="widget">
                                <h3 class="widget-title">Postingan Terbaru</h3>
                                <?php
                                $counter = 0;
                                foreach ($blog as $b) :
                                    if ($counter >= 5) break;
                                    $counter++;
                                ?>
                                    <div class="rc-post-wrap mb-2">
                                        <div class="rc-post-item">
                                            <div class="rc-post-thumb">
                                                <a href="/blog-details/<?= $b['slug']; ?>"><img src="/assets/gambar/<?= $b['gambar']; ?>" alt="img"></a>
                                            </div>
                                            <div class="rc-post-content">
                                                <span class="date"><i class="far fa-calendar-alt"></i> <?= date('F j, Y', strtotime($b['updated_at'])); ?></span>
                                                <h5 class="title"><a href="/blog-details/<?= $b['slug']; ?>"><?= $b['judul']; ?></a></h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
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