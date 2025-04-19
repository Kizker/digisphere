<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Config\Services;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

// System routes (jangan dihapus)
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * ---------------------------------------------------------------
 * Router Setup
 * ---------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages'); // Ganti dengan controller default kamu
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// ✅ Aktifkan auto routing (legacy)
$routes->setAutoRoute(true);
// ⚠️ Jangan pakai improved jika belum siap config middleware dan lainnya
// $routes->setAutoRoute('Improved'); // JANGAN aktifkan ini dulu

/*
 * ---------------------------------------------------------------
 * Route Definitions
 * ---------------------------------------------------------------
 */

// ✅ Route default ke Pages::index (untuk akses '/')
$routes->get('/', 'Pages::index');

// ✅ Contoh route manual tambahan (opsional)
$routes->get('blog', 'Pages::blog');
$routes->get('blog-details', 'Pages::blog_details');

/*
 * ---------------------------------------------------------------
 * Environment Specific Routes
 * ---------------------------------------------------------------
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
