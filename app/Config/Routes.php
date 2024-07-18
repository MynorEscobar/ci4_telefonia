<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('planes','PlanesController::index');
$routes->get('nuevo_plan','PlanesController::nuevoPlan');
$routes->post('agregar_plan','PlanesController::agregarPlan');
$routes->post('agregar_cliente','ClientesController::agregarCliente');
$routes->get('nuevo_cliente','ClientesController::nuevoCliente');