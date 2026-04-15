<?php

use Core\Route; 
use App\controllers\IndexController;
use App\controllers\LoginController;
use App\controllers\LogoutController;
use App\controllers\RegisterController;
use App\controllers\DashboardController;
use App\controllers\Notas\CriarController;

(new Route())

->get('/', IndexController::class)

->get ('/login', [LoginController::class,'index'])
->post ('/login', [LoginController::class,'login'])

->get('/dashboard', DashboardController::class)
->get('/logout', LogoutController::class)

->get ('/register', [RegisterController::class, 'index'])
->post ('/register', [RegisterController::class, 'register'])

->get('/notas/criar', [CriarController::class, 'index'])
->post('/notas/criar', [CriarController::class, 'store'])

->run();

die();
