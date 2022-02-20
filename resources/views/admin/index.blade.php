@extends('layouts.admin')

@section('content')

    <div class="card admin" >
        <h2>{{Auth::user()->usuario}}</h2>
        {{ Html::image('img/'.$row->imagen, 'foto perfil', ['class'=>'circle']) }}
        <div class="card-content">
            <p><span>-Usuario: </span>{{ $row->usuario }}</p>
            <p><span>-Fecha creación cuneta: </span>{{ $row->created_at }}</p>
            <p><span>-Email: </span>{{ $row->email }}</p>
        </div>
        <p class="bio">{{ $row->biografia }}</p>
        <div class="card-content">
            <div class="card-action">
                <a href="#">Editar</a>
                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
            </div>
        </div>
        <div class="card-reveal" style="background-color: black;">
            <span class="card-title  text-darken-4"><span> {{ $row->usuario }}</span><i class="material-icons right">close</i></span>
            <span> {{ $row->biografia }}</span>
        </div>
    </div>
<form method="POST" action="">
    @csrf
    <a onclick="$(this).closest('form').submit()" title="Salir" class="salir">Salir</a>
</form>
@endsection

