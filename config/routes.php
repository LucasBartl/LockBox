<?php

use Core\Route;
use App\controllers\IndexController;
use App\controllers\LoginController;
use App\controllers\LogoutController;
use App\controllers\RegisterController;
use App\controllers\Notas\CriarController;
use App\Middlewares\GuestMiddleware;
use App\Middlewares\AuthMiddleware;
use App\Controllers\Notas;
(new Route())

    /* Rotas funcionais sem autenticação */
    ->get('/', IndexController::class, GuestMiddleware::class)
    ->get('/login', [LoginController::class, 'index'], GuestMiddleware::class)
    ->post('/login', [LoginController::class, 'login'], GuestMiddleware::class)
    ->get('/register', [RegisterController::class, 'index'], GuestMiddleware::class)
    ->post('/register', [RegisterController::class, 'register'], GuestMiddleware::class)

    /* Rotas com necessidade de autenticação  */
    ->get('/notas/criar',  [CriarController::class, 'index'],AuthMiddleware::class)
    ->post('/notas/criar', [CriarController::class, 'store'],AuthMiddleware::class)
    ->get('/notas', [Notas\IndexController::class, '__invoke'],AuthMiddleware::class)
    ->get('/logout', LogoutController::class,AuthMiddleware::class)

    ->run();

die();
