<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //http://35.181.8.108/2Eva/proyecto_final_dam-daw/public/index.php/acceder
        //ruta a la funcion de acceder --> authcontroller --> autenticar()
    ];
}
