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

        $rowset = Usuarios::
            join('datos','datos.usuario', '=', 'usuarios.usuario')
            ->where('usuarios.usuario', $usuario)
            ->get();

        if($rowset=="[]"){
            $rowset = Usuarios::where('usuario',$usuario)->get();
        }
        return view('admin.index',['rowset' => $rowset,]);
    }



}
