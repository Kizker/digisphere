<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// ✅ Route default ke Pages::index (untuk akses '/')
$routes->get('/', 'Pages::index');

// ✅ Contoh route manual tambahan (opsional)
$routes->get('blog', 'Pages::blog');
// $routes->get('blog-details', 'Pages::blog_details');
$routes->get('blog-details/(:segment)', 'Pages::blog_details/$1');

// login 
$routes->get('login', 'Login::index');
$routes->post('login/auth', 'Login::auth');
$routes->get('logout', 'Login::logout');
// $routes->get('/admin', 'Login::admin');

// admin
$routes->get('admin', 'Blog::index');
$routes->post('admin', 'Blog::index');
$routes->get('create', 'Blog::create');
$routes->post('admin/save', 'Blog::save');
$routes->get('admin/edit/(:any)', 'Blog::edit/$1');
$routes->post('admin/update/(:num)', 'Blog::update/$1');
$routes->delete('admin/delete/(:num)', 'Blog::delete/$1');
$routes->get('admin/detail/(:any)', 'Blog::detail/$1');
