<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use App\Models\Usuarios;
use Illuminate\Http\Request;

class ApiController
{
    public function comprobarUsuario (Request $request) {
        //Esto se hace mediante POST
        $email = $request->email;
        $password = $request->password;

        $user = Usuarios::where('email', $email)->first();
        if ($user && Hash::check($password, $user->password)) {
            echo "1";
        } else {
            echo "0";
        }
    }

    public function añadirPartida(Request $request){

    }
}
