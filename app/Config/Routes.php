<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/home/login', 'Home::login');
$routes->get('/home/logout', 'Home::logout');
$routes->get('/dashboard', 'Dashboard::index');

