<?php 

namespace App\controllers;


class IndexController
{
    public function __invoke()
    {
      return view('index');
    }
}