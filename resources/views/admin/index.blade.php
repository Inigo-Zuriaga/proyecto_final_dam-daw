@extends('layouts.admin')

@section('content')

    <header>
        <h2> Bienvenido de nuevo {{ $row->usuario }}</h2>
    </header>
    <section class="container-fluid">
        <div class="collection-item avatar">
            {{ Html::image('img/'.$row->imagen, 'imagen perfil',['class'=>'circle']) }}
            <span> {{ $row->usuario }}</span>
            <span> {{ $row->email }}</span>
            <span> {{ $row->biografia }}</span>

            @php @endphp

        </div>
    </section>
@endsection
