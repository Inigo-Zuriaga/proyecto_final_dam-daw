<?php

namespace App\Http\Controllers;

class AppController extends Controller
{
    public function index()
    {
        return view('app.index',[

        ]);
    }

    public function comojugar()
    {
        return view('app.acerca-de');
    }

    public function foro()
    {
        return view('app.acerca-de');
    }

    public function clasificacion()
    {
        //Obtengo los datos a mostrar en el listado de datos
        $rowset = Datos::where('activo', 1)->orderBy('fecha', 'DESC')->get();

        return view('app.noticias',[
            'rowset' => $rowset,
        ]);
    }


    public function equipo()
    {
        return view('app.acerca-de');
    }

    public function acercade()
    {
        return view('app.acerca-de');
    }




}
