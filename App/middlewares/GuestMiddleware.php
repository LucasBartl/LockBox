<?php

namespace App\Middlewares;

class GuestMiddleware
{
    public function handle(){
        //Com isso criamos um meio que o usuário n acesse rota que não usam autenticação 
        if (auth() ) {
            return redirect('/notas');
        }


    }
}
