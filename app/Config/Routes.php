<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Home::index');
 
 
 $routes->get('/login', 'LoginController::index');


 $routes->group('admin', static function ($routes) {
    $routes->get('dashboard', 'DashboardController::index');

    $routes->get('pohon', 'PohonController::index');
    $routes->post('pohon/create', 'PohonController::create');
    $routes->post('pohon/update/(:any)', 'PohonController::update/$1');
    $routes->delete('pohon/delete/(:any)', 'PohonController::delete/$1');

    $routes->get('produksi', 'ProduksiController::index');
    $routes->post('produksi/create', 'ProduksiController::create');
    $routes->post('produksi/update/(:any)', 'ProduksiController::update/$1');
    $routes->delete('produksi/delete/(:any)', 'ProduksiController::delete/$1');


});

