<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/', 'Home::index');
 
 
 $routes->get('/login', 'LoginController::index');

 $routes->get('/admin/dashboard', 'DashboardController::index');
 $routes->get('/admin/pohon', 'PohonController::index');
 $routes->get('/admin/produksi', 'ProduksiController::index');
