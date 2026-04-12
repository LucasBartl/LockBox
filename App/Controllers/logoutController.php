<?php

namespace App\controllers;


class LogoutController
{
    public function __invoke()
    {

        session_destroy();
        redirect("/login");
        
    }
}
