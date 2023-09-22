<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'WatchController::index');
$routes->get('products/create', 'WatchController::create');
$routes->post('products/store', 'WatchController::store');
$routes->get('products/edit/(:num)', 'WatchController::edit/$1');
$routes->post('products/update/(:num)', 'WatchController::update/$1');
$routes->get('products/delete/(:num)', 'WatchController::delete/$1');
