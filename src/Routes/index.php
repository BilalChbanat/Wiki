<?php

use App\Router;

use App\Controllers\HomeController;
use App\Controllers\DashboardController;
use App\Controllers\TagsController;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/dashboard', DashboardController::class, 'index');
$router->get('/addCat', DashboardController::class, 'add');
$router->get('/deleteAction', DashboardController::class, 'deleteAction');
$router->post('/addAction', DashboardController::class, 'addAction');
$router->get('/update', DashboardController::class, 'update');
$router->post('/updateAction', DashboardController::class, 'updateAction');
// $router->get('/dashboard', DashboardController::class, 'index');
// $router->get('/user', HomeController::class, 'user');

$router->get('/tag', TagsController::class, 'index');
$router->get('/addTag', TagsController::class, 'add');
$router->post('/addActionTag', TagsController::class, 'addActionTag');
$router->get('/updateTag', TagsController::class, 'updateTag');




// $router->post('/insert', HomeController::class, 'insert');

$router->dispatch();
