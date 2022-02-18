
@extends('layouts.app')

@section('content')

<section class="cabecera">
    <div class="video">
        <video height="775" loop autoplay muted>
            <source src="{{asset('img/gameplay.mp4')}}" type="video/mp4">
        </video>
    </div>
    <div class="jugarya">
        <p>¡Únete a Crash Bandicoot en una misión para recorrer el mundo!</p>
        {{ Html::image('img/logo.png', 'Logo Crash Bandicoot') }}
        <!--Si estoy seteado, es un enlace-->
        <a href="{{ route('jugar') }}" title="Jugar" target="_blank" class="jugargratis">Jugar gratis</a>
        <!--Si no estoy seteado, abro un div con botones-->
        <button onclick="abrirDiv()">Jugar</button>
    </div>
</section>
<div align="center" class="card-panel teal" id="hola">
    <button onclick="cerraDiv()" class="cerrar">
        <i class="material-icons">clear</i>
    </button>
    <div class="contenidovent">
        <h3>Preparate para jugar</h3>
        <div class="botones">
            <div class="bt1">
                <span>Aún no tengo una cuenta</span><br>
                <a href="{{ route('registro') }}" class="boton">Crear una cuenta</a>
            </div>
            <div class="bt2">
                <span>Tengo una cuenta</span>
                <p><a href="{{ route('admin') }}">Iniciar sesión</a></p>
            </div>
        </div>
    </div>
</div>

@endsection
