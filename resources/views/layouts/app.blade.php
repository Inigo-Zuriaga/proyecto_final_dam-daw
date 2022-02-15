<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--Metas-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Noticias de Harry Potter">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Crash Bandicoot Run!') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/eca2f6d7a08be97ebbfb8a1c2c2be5e6?family=CCGeekSpeakW00-Regular" rel="stylesheet" type="text/css"/>
</head>

<body>

<nav>
    <div class="nav-wrapper">
        <!--Logo-->
        <div class="logo">
            <a href="{{ route('home') }}" class="brand-logo" title="Inicio">
                {{ Html::image('img/Logo_Tab.png', 'Logo Crash Bandicoot') }}
            </a>
        </div>
        <!--Botón menú móviles-->
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <!--Menú de navegación-->
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li>
                <a href="{{ route('home') }}" title="Inicio">Inicio</a>
            </li>
            <li>
                <a href="{{ route('comojugar') }}" title="Como jugar">Cómo jugar</a>
            </li>
            <li>
                <a href="{{ route('foro') }}" title="Foro">Foro</a>
            </li>
            <li>
                <a href="{{ route('clasificacion') }}" title="Clasificación">Clasificación</a>
            </li>
            <li>
                <a href="{{ route('equipo') }}" title="Equipo">Equipo</a>
            </li>
            <li>
                <a href="{{ route('acercade') }}" title="Acerca de">Acerca de</a>
            </li>
        </ul>
        <a href="{{ route('admin') }}" title="Panel de administración" target="_blank">
            {{ Html::image('img/btAceder.png', 'Boton acceder' ,['style'=>'width:150px;padding-top:0.5rem;float:right']) }}
        </a>
    </div>
</nav>
<svg>
    <polygon points="0,0 1920,0 1920,10 0,20" fill="#0081cc"/>
</svg>

<!--Menú de navegación móvil-->
<ul class="sidenav" id="mobile-demo">
    <li>
        <a href="{{ route('home') }}" title="Inicio">Inicio</a>
    </li>
    <li>
        <a href="{{ route('comojugar') }}" title="Como jugar">Cómo jugar</a>
    </li>
    <li>
        <a href="{{ route('foro') }}" title="Foro">Foro</a>
    </li>
    <li>
        <a href="{{ route('clasificacion') }}" title="Clasificación">Clasificación</a>
    </li>
    <li>
        <a href="{{ route('equipo') }}" title="Equipo">Equipo</a>
    </li>
    <li>
        <a href="{{ route('acercade') }}" title="Acerca de">Acerca de</a>
    </li>
    <li>
        <a href="{{ route('admin') }}" title="Panel de administración" target="_blank" class="grey-text">Acceder</a>
    </li>
</ul>

<main>

    <header>
        <h1>Mi primer CMS</h1>
        <h2>con Laravel</h2>
    </header>

    <section class="container-fluid">

        <!--Content-->
    @yield('content')

    <!--Footer-->
    </section>
</main>

<footer class="center-align">
    <svg>
        <polygon points="0,0 1920,0 1920,10 0,25" fill="#0081cc"/>
    </svg>
    <div class="contenido">
        <a href="http://www.pegi.info" class="pegi"  target="_blank" title="Pegi">
            {{ Html::image('img/PEGI-7.png', 'Logo Pegi 7') }}
        </a>
        <a href="https://unity.com/es" class="unity-class" target="_blank" title="Unity">
            {{ Html::image('img/Unity.png', 'Logo Unity')}}
        </a>&nbsp &nbsp
        <a href="https://materializecss.com/" class="mate-class" target="_blank" title="Materialize">
            {{ Html::image('img/materialize.png', 'Logo materialize') }}
        </a>
        <a href="https://unity.com/es" class="php-class" target="_blank" title="PhpStorm">
            {{ Html::image('img/php.png', 'Logo Php') }}
        </a>
        <p align="center" class="copy"><?php echo date("Y") ?> Activision Publishing Inc. ACTIVISION, CRASH TEAM RACING, CTR,
            CRASH BANDICOOT CRASH y CRASH: ON THE RUN! son marcas comerciales de Activision Publishing, Inc.
            El icono de clasificación es una marca comercial de la Entertainment Software Association.
            El resto de marcas y nombres comerciales son propiedad de sus respectivos titulares.</p>
    </div>
</footer>

</body>

<!--Scripts-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>

</html>
