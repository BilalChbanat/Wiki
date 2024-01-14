<?php
session_start();

use App\Router;

use App\Controllers\HomeController;
use App\Controllers\DashboardController;
use App\Controllers\TagsController;
use App\Controllers\UserController;
use App\Controllers\WikiController;
use App\Controllers\AuthorController;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/dashboard', DashboardController::class, 'index');
$router->get('/addCat', DashboardController::class, 'add');
$router->get('/deleteAction', DashboardController::class, 'deleteAction');
$router->post('/addAction', DashboardController::class, 'addAction');
$router->get('/update', DashboardController::class, 'update');
$router->post('/updateAction', DashboardController::class, 'updateAction');
$router->get('/wikis', DashboardController::class, 'wikis');
$router->post('/acceptWiki', DashboardController::class, 'acceptWiki');


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
$router->get('/logout', UserController::class, 'logout');

//wiki 
$router->get('/add', WikiController::class, 'add');
// $router->get('/deleteAction', WikiController::class, 'deleteAction');
$router->post('/addWikiAction', WikiController::class, 'addWikiAction');
$router->post('/updateWikiAction', WikiController::class, 'updateWikiAction');

// author 
$router->get('/DashboardAuthor', AuthorController::class, 'DashboardAuthor');
$router->get('/updateWiki', AuthorController::class, 'updateWiki');



$router->dispatch();
