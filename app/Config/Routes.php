<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/* Index */
$routes->get('/', 'Home::index');

/* Booking */
$routes->get('/booking/button', 'Booking::button');
$routes->post('/booking/saveBooking', 'Booking::saveBooking');

/* Profile */
$routes->get('/ticket', 'Profile::ticket');

/* Auth */
$routes->get('/login', 'Auth::login');
$routes->get('/regist', 'Auth::regist');
