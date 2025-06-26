<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('course/(:num)', 'CourseController::view/$1');

$routes->group('course', ['filter' => 'userauth'], function ($routes) {
    $routes->get('join-course/(:num)', 'CourseController::joinCourse/$1');
    $routes->get('(:num)/module/(:num)', 'ModuleController::view/$1/$2');
    $routes->get('(:num)/module/(:num)/quiz', 'QuizController::view/$1/$2');
    $routes->post('(:num)/module/(:num)/quiz/submit', 'QuizController::submit/$1/$2');
    $routes->get('(:num)/module/(:num)/quiz/review', 'QuizController::review/$1/$2');
});
$routes->post('forum/post', 'ForumController::post');
$routes->post('forum/thread/create', 'ForumController::createThread');
$routes->get('course/(:num)/module/(:num)/forum', 'ForumController::moduleForum/$1/$2');


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

$routes->group('user/dashboard', ['filter' => 'userauth'], function ($routes) {
    $routes->get('/', 'UserDashboardController::index'); // Ini menangani GET user/dashboard
    $routes->get('profile', 'UserDashboardController::profile');
    $routes->post('profile/update', 'UserDashboardController::updateProfile');
    $routes->post('profile/change-password', 'UserDashboardController::changePassword');
    $routes->get('getMyCertificate', 'UserDashboardController::getMyCertificate');
    $routes->get('showCertificate', 'UserDashboardController::showCertificate');
});

$routes->get('user/course', 'UserDashboardController::course', ['filter' => 'userauth']);

$routes->group('admin', ['filter' => 'adminauth'], function ($routes) {
    $routes->get('dashboard', 'AdminDashboardController::index');
    $routes->get('courses', 'AdminCourseController::index'); // manage_courses.php
    $routes->post('courses/update-thumbnail/(:num)', 'AdminCourseController::updateThumbnail/$1');
    $routes->post('courses/create', 'AdminCourseController::create'); // manage_courses.php
    $routes->post('courses/delete/(:num)', 'AdminCourseController::delete/$1'); // manage_courses.php
    $routes->get('users', 'AdminUserController::index');     // manage_users.php
    $routes->get('courses/view/(:num)', 'AdminCourseController::view/$1');
    $routes->post('courses/update-description/(:num)', 'AdminCourseController::updateDescription/$1');
    $routes->post('modules/update-title/(:num)', 'AdminModuleController::updateTitle/$1');
    $routes->post('modules/update-title/(:num)/(:num)', 'AdminModuleController::updateTitle/$1/$2');
    $routes->get('modules/view/(:num)/(:num)', 'AdminModuleController::view/$1/$2');
    $routes->post('modules/add/(:num)', 'AdminModuleController::add/$1');
    $routes->post('modules/update-content/(:num)/(:num)', 'AdminModuleController::updateContent/$1/$2');
    $routes->post('modules/update-video/(:num)/(:num)', 'AdminModuleController::updateVideo/$1/$2');
    $routes->post('quiz/(:num)/(:num)/create', 'AdminQuizController::create/$1/$2');
    $routes->get('quiz/(:num)/(:num)/(:num)', 'AdminQuizController::view/$1/$2/$3');
    $routes->post('quiz/(:num)/(:num)/(:num)/update', 'AdminQuizController::update/$1/$2/$3');
    $routes->post('quiz/(:num)/(:num)/(:num)/delete/(:num)', 'AdminQuizController::delete/$1/$2/$3/$4');
    $routes->post('quiz/(:num)/(:num)/(:num)/add-question', 'AdminQuizController::addQuestion/$1/$2/$3');

    $routes->post('users/delete/(:num)', 'AdminUserController::delete/$1');
    $routes->post('users/update/(:num)', 'AdminUserController::update/$1');
    $routes->get('users/courses/(:num)', 'AdminUserController::courses/$1');
    $routes->get('users/courses/scores/(:num)/(:num)', 'AdminUserController::courseScores/$1/$2');

    $routes->post('quiz/(:num)/(:num)/(:num)/update-time', 'AdminQuizController::updateTime/$1/$2/$3');
});
