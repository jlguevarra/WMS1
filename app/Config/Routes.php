<?php

use CodeIgniter\Router\RouteCollection;

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

$routes->setDefaultController('Register');

// Register Routes
$routes->get('/', 'Register::index', ['filter' => 'guestFilter']);
$routes->get('/register', 'Register::index', ['filter' => 'guestFilter']);
$routes->post('/register', 'Register::register', ['filter' => 'guestFilter']);

// Login and Logout Routes
$routes->get('/login', 'Login::index', ['filter' => 'guestFilter']);
$routes->post('/login', 'Login::authenticate', ['filter' => 'guestFilter']);
$routes->get('/logout', 'Login::logout', ['filter' => 'authFilter']);

// Dashboard Route
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'authFilter']);

// Other routes related to dashboard (if needed)
$routes->get('/dashboard/tracking', 'Dashboard::tracking', ['filter' => 'authFilter']);

//Suppliers routes
$routes->get('/dashboard/suppliers', 'SuppliersController::index');
$routes->get('/dashboard/suppliers/create', 'SuppliersController::create');
$routes->post('/dashboard/suppliers/store', 'SuppliersController::store');
$routes->get('/dashboard/suppliers/edit/(:num)', 'SuppliersController::edit/$1');
$routes->post('/dashboard/suppliers/update/(:num)', 'SuppliersController::update/$1');
$routes->get('/dashboard/suppliers/delete/(:num)', 'SuppliersController::delete/$1');

//Customers routes
$routes->group('dashboard/customers', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'CustomersController::index');          // Display list of customers
    $routes->get('create', 'CustomersController::create');    // Show form to add a new customer
    $routes->post('store', 'CustomersController::store');     // Store new customer in the database
    $routes->get('edit/(:num)', 'CustomersController::edit/$1'); // Show form to edit a customer
    $routes->post('update/(:num)', 'CustomersController::update/$1'); // Update customer information
    $routes->get('delete/(:num)', 'CustomersController::delete/$1'); // Delete customer
});

$routes->group('dashboard/tracking', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'TrackingController::index');             // Main tracking page
    $routes->get('incoming', 'TrackingController::incoming');   // Incoming tracking page
    $routes->get('outgoing', 'TrackingController::outgoing');   // Outgoing tracking page
});

//incoming_goods routes
$routes->get('/incoming_goods', 'IncomingGoods::index');
$routes->get('/incoming_goods/create', 'IncomingGoods::create');
$routes->post('/incoming_goods/store', 'IncomingGoods::store');
$routes->get('/incoming_goods/edit/(:num)', 'IncomingGoods::edit/$1');
$routes->post('/incoming_goods/update/(:num)', 'IncomingGoods::update/$1');
$routes->get('/incoming_goods/delete/(:num)', 'IncomingGoods::delete/$1');

//outgoing goods
$routes->get('/outgoing_goods', 'OutgoingGoodsController::index');
$routes->get('/outgoing_goods/create', 'OutgoingGoodsController::create');
$routes->post('/outgoing_goods/store', 'OutgoingGoodsController::store');
$routes->get('/outgoing_goods/edit/(:num)', 'OutgoingGoodsController::edit/$1');
$routes->post('/outgoing_goods/update/(:num)', 'OutgoingGoodsController::update/$1');
$routes->get('/outgoing_goods/delete/(:num)', 'OutgoingGoodsController::delete/$1');

//inventory Routes
$routes->get('/inventory', 'InventoryController::index');
$routes->get('/inventory/create', 'InventoryController::create');
$routes->post('/inventory/store', 'InventoryController::store');
$routes->get('/inventory/edit/(:num)', 'InventoryController::edit/$1');
$routes->post('/inventory/update/(:num)', 'InventoryController::update/$1');
$routes->get('/inventory/delete/(:num)', 'InventoryController::delete/$1');










