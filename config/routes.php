<?php

use Core\Route;
use App\controllers\IndexController;
use App\controllers\LoginController;
use App\controllers\LogoutController;
use App\controllers\RegisterController;
use App\controllers\DashboardController;
use App\controllers\Notas\CriarController;

(new Route())

    /* Rotas funcionais sem autenticação */
    ->get('/', IndexController::class)
    ->get('/login', [LoginController::class, 'index'])
    ->post('/login', [LoginController::class, 'login'])
    ->get('/logout', LogoutController::class)
    ->get('/register', [RegisterController::class, 'index'])
    ->post('/register', [RegisterController::class, 'register'])

    /* Rotas com necessidade de autenticação  */
    ->get('/notas/criar', [CriarController::class, 'index'])
    ->post('/notas/criar', [CriarController::class, 'store'])
    ->get('/dashboard', DashboardController::class)

    ->run();

die();
