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
$routes->post('/enviar-form', 'Usuario_controller::formValidation');

/**
 * Rutas del Ingreso de Usuarios
 */
$routes->get('ingreso', 'Login_controller::ingreso');
$routes->post('/enviar-form-login', 'Login_controller::auth');
$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/cerrar-login', 'Login_controller::logout', ['filter' => 'auth']);