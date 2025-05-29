<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('course/(:num)', 'Course::view/$1');

$routes->get('user', 'User::index');

$routes->get('login', 'User::login');
$routes->post('user/check_login', 'User::check_login');

$routes->get('register', 'User::register');
$routes->post('register', 'User::saveRegister');

$routes->get('user/logout', 'User::logout');

$routes->get('admin/login', 'Admin::login');
$routes->post('admin/check_login', 'Admin::check_login');

$routes->get('admin/logout', 'admin::logout');


$routes->get('admin/dashboard', 'AdminDashboard::index', ['filter' => 'adminauth']);

$routes->get('user/dashboard', 'UserDashboard::index', ['filter' => 'userauth']);
$routes->get('user/course', 'UserDashboard::course', ['filter' => 'userauth']);


