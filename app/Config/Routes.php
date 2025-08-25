<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

/**
 * //
 * @var RouteCollection $routes
 */
$routes->setDefaultNameSpace("App\Controllers");
$routes->setDefaultController("Productos");
$routes->setDefaultMethod("index");
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
$routes->get('productos', 'Productos::index');
$routes->get('productos/(:num)', 'Productos::show/$1');
$routes->get('/productosshow/([0-9]{2})', 'Productos::othershow/$1');
$routes->get('/productos/(:alpha)/(:num)', 'Productos::cat/$1/$2');
$routes->get('/productos/transaccion', 'Productos::transaccion');

$routes->view('productosList/(:alpha)', 'lista_productos');

$routes->group('admin', static function($routes){
    $routes->get('/productos', 'Admin\Productos::index');
});