<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('course/(:num)', 'CourseController::view/$1');
$routes->get('course/(:num)/module/(:num)', 'ModuleController::view/$1/$2');

$routes->get('user', 'UserController::index');

$routes->get('login', 'UserController::login');
$routes->post('user/check_login', 'UserController::check_login');

$routes->get('register', 'UserController::register');
$routes->post('register', 'UserController::saveRegister');

$routes->get('user/logout', 'UserController::logout');

$routes->get('admin/login', 'AdminController::login');
$routes->post('admin/check_login', 'AdminController::check_login');

$routes->get('admin/logout', 'adminController::logout');


$routes->get('admin/dashboard', 'AdminDashboardController::index', ['filter' => 'adminauth']);

$routes->get('user/dashboard', 'UserDashboardController::index', ['filter' => 'userauth']);
$routes->get('user/course', 'UserDashboardController::course', ['filter' => 'userauth']);


