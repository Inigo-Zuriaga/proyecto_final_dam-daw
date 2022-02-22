<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiController
{
    public function comprobarUsuario (Request $request) {

        $email = $request->email;
        $password = $request->password;

        $user = Usuarios::where('email', $email)->first();
        if ($user && Hash::check($password, $user->password)) {
            echo "1";
        } else {
            echo "0";
        }
    }

    public function verUsuario(){
        return view('api.partida');
    }

    public function verPartida(){
        return view('api.crearPartida');
    }

    public function crearPartida(){
        Datos::create([
            'usuario' => 'pepe',
            'frutas' => '25',
            'enemigos' => '10',
            'ult_distancia' => '50',
            'numero_partidas' => '10',
        ]);
        echo "partida añadida";
    }

    public function verClasificacion(){
        $rowset = Datos::orderBy('record', 'ASC')->limit(5)->get();

        foreach ($rowset as $row){
            $datos[] = [
                'usuario' => $row->usuario,
                'frutas' => $row->frutas,
                'enemigos' => $row->enemigos,
                'numero_partidas' => $row->numero_partidas,
                'record' => $row->record,
                'fecha_record' => date("d/m/Y", strtotime($row->fecha_record)),
            ];
        }

        //Devuelvo JSON
        return response()->json(
            $datos, //Array de objetos
            200, //Tipo de respuesta
            [], //Headers
            //dejaro bonito             barras                   tildes
            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE //Opciones de escape
        );
    }


}
