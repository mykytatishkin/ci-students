<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'StudentsController::index');
