<?php

namespace App\controllers;


class DashboardController
{
    public function __invoke()
    {


        if (!auth()) {

            return redirect('/login');
        }
        echo 'Estou logado ' . auth()->nome;
    }
}
