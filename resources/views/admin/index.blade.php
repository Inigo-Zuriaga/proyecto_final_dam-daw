@extends('layouts.admin')

@section('content')
<!--
    <div class="row">

        <div class="col s12 m3 l3" style="margin-left: 10%; width: 50%" >
            <div class="card" style="">
                <div class="card-image"><br>
                    <img src="http://3.143.248.187/proyecto_final_dam-daw/public/img/carlos.jpeg" style="width: 80%; margin-left: 40px">
                </div>

                <div class="card-content">
                    <p>{{ $row->created_at }}</p>
                    <p>{{ $row->email }}</p>



                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4"><span> {{ $row->usuario }}</span><i class="material-icons right">more_vert</i></span>

                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><span> {{ $row->usuario }}</span><i class="material-icons right">close</i></span>
                    <span> {{ $row->biografia }}</span>
                </div>

            </div>
        </div>
    </div>
-->

    <div class="card" style="background-color: #0000007a;;">
        <img src="http://3.143.248.187/proyecto_final_dam-daw/public/img/{{ $row->imagen }}" alt="" style="margin-left: 15px; margin-top: 45px;float: left">

        <br>
        <div class="card-content" style="text-align: left; margin-left: 23%; margin-right: 40px">
            <p><span style="color: #ff8d0e">-Usuario: </span>{{ $row->usuario }}</p>
            <p><span style="color: #ff8d0e">-Fecha creación cuneta: </span>{{ $row->created_at }}</p>
            <p><span style="color: #ff8d0e">-Email: </span>{{ $row->email }}</p>

        </div>
        <p style="text-align: left; margin-left: 23%; margin-right: 40px">{{ $row->biografia }}</p>

        <div class="card-content">

            <div class="card-action">
                <a href="#">Editar</a>
                <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
            </div>
        </div>
        <div class="card-reveal" style="background-color: black;">
            <span class="card-title grey-text text-darken-4"><span> {{ $row->usuario }}</span><i class="material-icons right">close</i></span>
            <span> {{ $row->biografia }}</span>
        </div>


    </div>
@endsection

