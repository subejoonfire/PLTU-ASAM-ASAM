<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/vibecheck/input/(:any)/(:any)/(:any)/(:any)', 'Home::store/$1/$2/$3/$4');
