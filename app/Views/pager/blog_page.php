<?php $pager->setSurroundCount(2) ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination with Gradient on Borders</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/default-icons.css">
    <link rel="stylesheet" href="/assets/css/unicons.css">
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/spacing.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <style>
        /* Styling untuk tombol pagination */
        .pagination .page-item .page-link {
            color: purple;
            /* Background default putih */
            border: 2px solid transparent;
            /* Border transparan sebagai dasar */
            border-radius: 30px;
            /* Membuat sudut tombol lebih bulat */
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .pagination .page-item .page-link:hover {
            color: white;
            background: white;
            border: 2px solid transparent;
            /* Menggunakan border yang akan diwarnai */
            background-image: linear-gradient(45deg, #9b59b6, #6a1b9a);
            /* Gradient pada border saat hover */
        }

        .pagination .page-item.active .page-link {
            /* color: white; */
            background: white;
            color: #6a1b9a;
            /* Warna teks aktif */
            border: 2px solid #6a1b9a;
            /* Border berwarna ungu pada tombol aktif */
        }

        .pagination .page-item.disabled .page-link {
            background: #e1bee7;
            color: #b39ddb;
            border: 2px solid transparent;
            /* Tidak ada border untuk tombol yang disabled */
        }

        /* Menambahkan padding untuk tombol pagination agar lebih lebar */
        .pagination .page-item .page-link {
            padding: 8px 20px;
        }
    </style>

</head>

<body>

    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <?php if ($pager->hasPrevious('blog')) : ?>
                <li class="page-item">
                    <a class="page-link" href="<?= $pager->getFirst('blog') ?>" aria-label="First">
                        <span aria-hidden="true">First</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="<?= $pager->getPrevious('blog') ?>" aria-label="Previous">
                        <span aria-hidden="true">Previous</span>
                    </a>
                </li>
            <?php endif ?>

            <?php foreach ($pager->links('blog') as $link): ?>
                <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                    <a class="page-link" href="<?= $link['uri'] ?>">
                        <?= $link['title'] ?>
                    </a>
                </li>
            <?php endforeach ?>

            <?php if ($pager->hasNext('blog')) : ?>
                <li class="page-item">
                    <a class="page-link" href="<?= $pager->getNext('blog') ?>" aria-label="Next">
                        <span aria-hidden="true">Next</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="<?= $pager->getLast('blog') ?>" aria-label="Last">
                        <span aria-hidden="true">Last</span>
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </nav>

    <!-- JS -->
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