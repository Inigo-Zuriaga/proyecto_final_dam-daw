@extends('layouts.admin')

@section('content')

    <div class="card admin" >
        <h2>{{Auth::user()->usuario}}</h2>
        {{ Html::image('img/'.$row->imagen, 'foto perfil', ['class'=>'circle']) }}
        <div class="card-content">
            <div class="infotitulo">Información básica</div>
            <div class="info">
                <p><span>Nombre </span>{{ $row->usuario }}</p>
                <p><span>Correo electrónico </span>{{ $row->email }}</p>
                <p><span>Contraseña </span>******</p>
                <p><span>Fecha creación cuenta </span>{{ $row->created_at }}</p>

                <p class="bio">{{ $row->biografia }}</p>
            </div>
        </div>

        <div class="card-content">
            <div class="card-action">
                <!--
                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
            </div>
        </div>


        <div class="card-reveal" style="background-color: black;">
            <span class="card-title  text-darken-4"><span>  $row->usuario </span><i class="material-icons right">close</i></span>
            <span>  $row->biografia </span>
        </div> -->
            </div>
    </div>
<form method="POST" action="">
    @csrf
    <a onclick="$(this).closest('form').submit()" title="Salir" class="salir">Salir</a>
</form>
@endsection

