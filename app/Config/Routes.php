<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('usuarios', 'Usuarios::index');
$routes->get('usuarios/eliminar/(:num)', 'Usuarios::eliminar/$1');
$routes->get('cuentas', 'Cuentas::index');
$routes->get('cuentas/eliminar/(:num)', 'Cuentas::eliminar/$1');


