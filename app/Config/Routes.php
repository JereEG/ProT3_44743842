<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('quienes_somos', 'Home::f_quienes_somos');
$routes->get('acerca_de', 'Home::f_acerca_de');
$routes->get('sitio_en_construccion', 'Home::f_sitio_en_construccion');
$routes->get('terminos_y_condiciones', 'Home::f_terminos_y_condiciones');
$routes->get('catalogo', 'Home::f_catalogo');



/**
 * Rutas del Registro de Usuarios
 */
$routes->get('registro', 'Usuario_controller::create');

/**
 * Rutas del Ingreso de Usuarios
 */
$routes->get('ingreso', 'Login_controller::ingreso');