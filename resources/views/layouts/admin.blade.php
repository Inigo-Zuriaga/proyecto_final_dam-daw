<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--Metas-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Panel de administración">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Panel de administración') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>

<body>

<nav>
    <div class="nav-wrapper">
        <!--Logo-->
        <div class="logo">
            <a href="{{ route('home') }}" class="brand-logo" title="Inicio">
                {{ Html::image('img/Logo_Tab.png', 'Logo Crash Bandicoot') }}
                <span class="run">run</span>
                {{ Html::image('img/logo.png', 'Logo Crash Bandicoot',['class'=>'logotxt']) }}

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
        <div class="navderecha">
            <a href="{{ route('jugar') }}" title="Jugar" target="_blank" class="jugar">Jugar</a>
            <a href="{{ route('admin') }}" title="Acceder" target="_blank" class="acceder">Acceder</a>
        </div>
    </div>
</nav>
<svg>
    <polygon points="0,0 1920,0 1920,10 0,20" fill="#0081cc"/>
</svg>

@if( Auth::check() )
    <!--Menú de navegación móvil-->
    <ul class="sidenav" id="mobile-demo">
        <li>
            <a href="{{ route('admin') }}" title="Inicio">Inicio</a>
        </li>
        @if( Auth::user()->usuarios )
            <li>
                <a href="{{ url('admin/usuarios') }}" title="Usuarios">Usuarios</a>
            </li>
        @endif
        <li>
            <form method="POST" action="">
                @csrf
                <a onclick="$(this).closest('form').submit()" title="Salir"  class="grey-text">
                    Salir
                </a>
            </form>
        </li>
    </ul>
@endif

<!-- Mensajes  -->
@include('admin.partials.mensajes')

<!--<div class="col s12 m7">
    <h2 class="header">Horizontal Card</h2>
    <div class="card horizontal">
        <div class="card-image">
            <img src="https://lorempixel.com/100/190/nature/6">
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>
</div>-->
<main class="iniciosesion">

    <header>
        <h1>Panel de administración</h1>

        @if( Auth::check() )

            <h2>
                Usuario: <strong>{{Auth::user()->usuario}}</strong>
            </h2>

        @else

            <h2>Bienvenido, introduce tus datos.</h2>

        @endif
    </header>

    <section class="container-fluid">

        <!--Content-->
        @yield('content')


    </section>
</main>

<!--Footer-->
<footer class="center-align">
    © <?php echo date("Y") ?> Panel de Administración.
    <a href="https://jairogarciarincon.com" target="_blank" title="Jairo García Rincón">
        Crash Bandicoot
    </a>
</footer>

</body>

<!--Scripts-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="{{ asset('js/admin.js') }}" defer></script>

</html>
