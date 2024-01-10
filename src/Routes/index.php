<?php

use App\Controllers\HomeController;
use App\Router;
use App\Controllers\DashBoardController;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/dashboard', DashBoardController::class, 'index');
// $router->get('/user', HomeController::class, 'user');
// $router->post('/insert', HomeController::class, 'insert');

$router->dispatch();
