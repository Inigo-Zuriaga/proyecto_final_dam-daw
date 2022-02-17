@extends('layouts.admin')

@section('content')
    <!--<div class="col s12 m7">
    <h2 class="header">Horizontal Card</h2>
    <div class="card horizontal">
        <div class="card-image">
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
    <div class="row cajita">
        <form class="col m12 20" method="POST" action="{{ route('autenticar') }}">
            @csrf
            <div class="row">
                <h2>Inicio Sesión</h2>
                <div class="input-field col s12">
                    <input id="email" type="text" name="email" value="">
                    <label for="email">Nombre de Usuario / Correo</label>
                </div>
                <div class="input-field col s12">
                    <input id="password" type="password" name="password" value="">
                    <label for="password">Contraseña</label>
                </div>
                <div class="input-field col s12">
                    <button class="btn btn-large waves-effect waves-light orange" type="submit">
                        <i class="material-icons">arrow_forward</i>
                    </button>
                    <p>
                        <a href="{{ route('registro') }}" title="Registrarse" class="crearcuenta">Crear una cuenta</a>
                    </p>
                </div>
            </div>
        </form>
    </div>
@endsection
