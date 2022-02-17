
@extends('layouts.app')

@section('content')

<section class="cabecera">
    <div class="video">
        <video height="775" loop autoplay muted>
            <source src="{{asset('img/gameplay.mp4')}}" type="video/mp4">
        </video>
    </div>
    <div class="jugarya">
        <p>¡Únete a Crash Bandicoot en una misión para recorrer el mundo </p>
        {{ Html::image('img/logo.png', 'Logo Crash Bandicoot') }}
        <button>Jugar gratis</button>
    </div>
</section>

@endsection
