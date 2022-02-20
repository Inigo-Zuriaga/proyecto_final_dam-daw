@extends('layouts.admin')

@section('content')

    <div class="card admin" >
        <h2>{{Auth::user()->usuario}}</h2>
        {{ Html::image('img/'.$row->imagen, 'foto perfil', ['class'=>'circle']) }}
        <div class="card-content">
            <div align="center" class="infotitulo">Información básica</div>
            <div class="info">
                <div class="row">
                    <span>Nombre </span><span class="valor">{{ $row->usuario }}</span>
                </div>
                <div class="row">
                    <span>Correo electrónico </span><span class="valor">{{ $row->email }}</span>
                </div>
                <div class="row">
                    <span>Contraseña </span><span class="valor">******</span>
                </div>
                <div class="row">
                    <span>Fecha creación cuenta </span><span class="valor">{{ $row->created_at }}</span>
                </div>
                <span class="card-title activator">Biografía</span>
            </div>
            <form method="POST" action="{{ route('salir') }}">
                @csrf
                <a onclick="$(this).closest('form').submit()" title="Salir" class="salir">Salir</a>
            </form>
        </div>
        <div class="card-reveal" style="background-color: black;">
            <span class="card-title  text-darken-4"><i class="material-icons right">close</i></span>
            <span>  {{ $row->biografia }} </span>
        </div>
    </div>

@endsection

