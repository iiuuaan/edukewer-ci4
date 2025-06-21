<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('course/(:num)', 'CourseController::view/$1');

$routes->group('course', ['filter' => 'userauth'], function ($routes) {
    $routes->get('(:num)/module/(:num)', 'ModuleController::view/$1/$2');
    $routes->get('(:num)/module/(:num)/quiz', 'QuizController::view/$1/$2');
    $routes->post('(:num)/module/(:num)/quiz/submit', 'QuizController::submit/$1/$2');
    $routes->get('(:num)/module/(:num)/quiz/review', 'QuizController::review/$1/$2');
});
$routes->post('forum/post', 'ForumController::post');
$routes->post('forum/thread/create', 'ForumController::createThread');


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
