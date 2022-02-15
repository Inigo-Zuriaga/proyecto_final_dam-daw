<?php

namespace App\Http\Controllers;

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
        $rowset = Datos::where('activo', 1)->orderBy('fecha_record', 'DESC')->get();

        return view('app.clasificacion',[
            'rowset' => $rowset,
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
