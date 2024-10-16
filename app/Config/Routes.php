<?php

namespace Config;

use CodeIgniter\Config\Services;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->group('auth', ['filter' => 'cors'], static function ($routes): void {
    $routes->post('login', 'AuthController::login');
    $routes->post('register', 'AuthController::register');
    $routes->get('me', 'AuthController::me', ['filter' => 'auth']);
});

$routes->group('habs', ['filter' => 'cors'], static function ($routes): void {
    $routes->post('', 'RoomsController::getRoomsByFilters');
    $routes->get('categories', 'RoomTypesController::getBedTypes');
    $routes->get('(:num)', 'RoomsController::getRoomInfo/$1');
    $routes->post('(:num)/reserve', 'BedroomReservationsController::reserveRoom/$1', ['filter' => 'auth']);
});

$routes->group('reservations', ['filter' => 'cors'], static function ($routes): void {
    $routes->get('(:num)', 'BedroomReservationsController::getReservationInfo/$1', ['filter' => 'auth']);
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
