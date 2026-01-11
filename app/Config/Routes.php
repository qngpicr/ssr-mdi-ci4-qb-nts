<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('/home', 'Home::index');
$routes->get('/index', 'Home::index');

$routes->get('test-env', 'TestEnv::index');

