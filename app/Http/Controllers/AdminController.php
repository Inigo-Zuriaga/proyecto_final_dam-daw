<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $usuario = Auth::user()->usuario;

        $row = Usuarios::where('usuario', $usuario)->firstOrFail();
        $pepe = Datos::where('usuario', $usuario)->firstOrFail();

        return view('admin.index',[
            'juan' => $row,'pepe'=>$pepe
        ]);


    }

}
