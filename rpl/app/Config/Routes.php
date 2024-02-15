<?php

use CodeIgniter\Commands\Utilities\Routes;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'pages::signin');
$routes->get('/home', 'home::index', ['filter' => 'authGuard']);
$routes->get('/pages/courses', 'pages::courses', ['filter' => 'authGuard']);
$routes->get('/pages/courses_detail', 'pages::courses_detail', ['filter' => 'authGuard']);
$routes->get('/pages/news', 'pages::news', ['filter' => 'authGuard']);
$routes->get('/pages/courses', 'pages::courses', ['filter' => 'authGuard']);
$routes->get('/pages/category', 'pages::category', ['filter' => 'authGuard']);
$routes->get('/user', 'pages::user_preferences', ['filter' => 'authGuard']);
$routes->get('/references', 'PreferenceController::index', ['filter' => 'authGuard']);
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/signup', 'pages::signup',);
$routes->match(['get', 'post'], 'register', 'pages::register');
$routes->match(['get', 'post'], 'loginAuth', 'pages::loginAuth');
$routes->match(['get', 'post'], 'preferences/store', 'PreferenceController::store', ['filter' => 'authGuard']);
$routes->get('/signin', 'pages::signin',);
$routes->get('/logout', 'pages::logout', ['filter' => 'authGuard']);
