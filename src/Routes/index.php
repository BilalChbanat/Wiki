<?php
session_start();
use App\Router;

use App\Controllers\HomeController;
use App\Controllers\DashboardController;
use App\Controllers\TagsController;
use App\Controllers\UserController;
use App\Controllers\WikiController;

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

//tags
$router->get('/tag', TagsController::class, 'index');
$router->get('/addTag', TagsController::class, 'add');
$router->post('/addActionTag', TagsController::class, 'addActionTag');
$router->get('/updateTag', TagsController::class, 'updateTag');
$router->post('/updateActionTag', TagsController::class, 'updateActionTag');
$router->get('/deleteActionTag', TagsController::class, 'deleteActionTag');

//user signup
$router->get('/signup', UserController::class, 'signup');
$router->post('/signupAction', UserController::class, 'signupAction');

//user login
$router->get('/login', UserController::class, 'login');
$router->post('/loginAction', UserController::class, 'loginAction');

//user login
$router->post('/logout', UserController::class, 'logout');
// $router->post('/insert', HomeController::class, 'insert');

//wiki 
$router->get('/add', WikiController::class, 'add');
// $router->get('/deleteAction', DashboardController::class, 'deleteAction');
$router->post('/addWikiAction', WikiController::class, 'addWikiAction');
// $router->get('/update', DashboardController::class, 'update');
// $router->post('/updateAction', DashboardController::class, 'updateAction');

$router->dispatch();
