@extends('layouts.admin')

@section('content')

    <div class="collection-item avatar">
        {{ Html::image('img/'.$row->imagen, 'imagen perfil',['class'=>'circle']) }}
        <span> {{ $row->usuario }}</span>
        <span> {{ $row->email }}</span>
        <span> {{ $row->biografia }}</span>

        @php @endphp

    </div>
@endsection
