<?php

use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/profile', 'Home::profile');
$routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profile');
// $routes->get('/user/profile', 'UserController::profile');
$routes->get('/user/profile', [UserController::class,'profile']);
$routes->get('/user/create', [UserController::class,'create']);
$routes->post('/user/store', [UserController::class, 'store']);

//list user
$routes->get('/user', [UserController::class, 'index']);

//edit
$routes->get('user/(:any)/edit', [UserController::class, 'edit']);

//update
$routes->put('user/(:any)', [UserController::class, 'update']);

//delete
$routes->delete('user/(:any)', [UserController::class, 'destroy']);

//menampilkan detail
$routes->get('user/(:any)', [UserController::class, 'show']);