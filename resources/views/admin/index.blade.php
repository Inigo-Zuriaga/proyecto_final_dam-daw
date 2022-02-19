@extends('layouts.admin')

@section('content')

    <div class="collection-item avatar">
        {{ Html::image('img/mordecai.jpeg', 'imagen perfil',['class'=>'circle']) }}
        <span> {{ $row->usuario }}</span>
    </div>
@endsection
