<?php

use App\Router;

use App\Controllers\HomeController;
use App\Controllers\DashboardController;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/dashboard', DashboardController::class, 'index');
$router->get('/addCat', DashboardController::class, 'add');
$router->post('/addAction', DashboardController::class, 'addAction');
// $router->get('/dashboard', DashboardController::class, 'index');
// $router->get('/user', HomeController::class, 'user');
// $router->post('/insert', HomeController::class, 'insert');

$router->dispatch();
