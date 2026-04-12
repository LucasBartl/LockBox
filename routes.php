<?php

use Core\Route; 
use App\controllers\IndexController;
use App\controllers\LoginController;
use App\controllers\LogoutController;
use App\controllers\RegisterController;
use App\controllers\DashboardController;

(new Route())

->get('/', IndexController::class)

->get ('/login', [LoginController::class,'index'])
->post ('/login', [LoginController::class,'login'])

->get('/dashboard', DashboardController::class)
->get('/logout', LogoutController::class)

->get ('/register', [RegisterController::class, 'index'])
->post ('/register', [RegisterController::class, 'register'])


->run();

die();
