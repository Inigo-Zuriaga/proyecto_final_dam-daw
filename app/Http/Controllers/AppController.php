<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use App\Models\Usuarios;

class AppController extends Controller
{
    //home
    public function index()
    {
        return view('app.index',[

        ]);
    }

    public function comojugar()
    {
        return view('app.comojugar');
    }

    public function foro()
    {
        $rowset = Usuarios::where('estado_post', 1)->orderBy('fecha_post', 'DESC')->get();

        return view('app.foro',[
            'rowset' => $rowset,
        ]);
    }

    public function hilo($slug)
    {
        $row = Usuarios::where('estado_post', 1)->where('slug',$slug)->get();

        return view('app.hilo',[
            'row' => $row,
        ]);
    }

    public function clasificacion()
    {
        //Obtengo los datos a mostrar en el listado de datos
        $rowset = Datos::orderBy('fecha_record', 'DESC')->get();
        //Obtengo los datos a mostrar en el listado de datos
        $rowset2 = Usuarios::orderBy('fecha_registro', 'DESC')->get();
        return view('app.clasificacion',[
            'rowset' => $rowset,
            'rowset2' => $rowset2,
        ]);


    }


    public function equipo()
    {
        return view('app.equipo');
    }

    public function acercade()
    {
        return view('app.acercade');
    }




}
