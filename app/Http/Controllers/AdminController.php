<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        /*
        *  $usuario=Auth::user()->usuario;
       $row = Usuario::where('usuario', $usuario)->firstOrFail();
       return view('admin.index',[
           'row' => $row,
       ]);
        */
        return view('admin.index');
    }


    public function perfil($id)
    {
        //Obtengo el usuario o muestro error
        $row = Usuario::where('id', $id)->firstOrFail();

        return view('admin.usuarios.editar',[
            'row' => $row,
        ]);
    }
}
