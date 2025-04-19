<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// ✅ Route default ke Pages::index (untuk akses '/')
$routes->get('/', 'Pages::index');

// ✅ Contoh route manual tambahan (opsional)
$routes->get('blog', 'Pages::blog');
$routes->get('blog-details', 'Pages::blog_details');
