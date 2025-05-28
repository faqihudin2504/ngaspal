<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('login', 'Login::login');
$routes->get('logout', 'Login::logout');

$routes->get('dashboard', 'Pages::dashboard');
$routes->get('profile', 'Pages::profile');
$routes->get('gallery', 'Pages::gallery');
$routes->get('hubungi-kami', 'Pages::hubungiKami');
$routes->get('artikel', 'Pages::artikel');
$routes->get('pemesanan', 'Pages::pemesanan');
$routes->get('bantuan', 'Pages::bantuan');
$routes->get('keranjang', 'Pages::keranjang');
$routes->group('', function($routes) {
    $routes->get('pemesanan-jasa', 'PemesananJasa::index');
    $routes->post('pemesanan-jasa/simpan', 'PemesananJasa::simpan');
});
