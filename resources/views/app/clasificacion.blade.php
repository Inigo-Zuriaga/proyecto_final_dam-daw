@extends('layouts.app')

@section('content')
@php $num= ($rowset->currentPage()-1)*10+1; @endphp
    <h3>
        TABLAS DE CLASIFICACIÓN
    </h3>
    <div class="row">
            <table class="striped centered">
                <thead>
                <tr>
                    <th>Posición</th>
                    <th>Usuario</th>
                    <th>Frutas</th>
                    <th>Enemigos</th>
                    <th>Número de partidas</th>
                    <th>Record</th>
                    <th>Fecha recordd</th>
                </tr>
                </thead>
        @foreach ($rowset as $row)
                    <tr>
                        <td>{{ $num++}}</td>
                        <td>{{ $row->usuario  }}</td>
                        <td>{{ $row->frutas  }}</td>
                        <td>{{ $row->enemigos  }}</td>
                        <td>{{ $row-> numero_partidas }}</td>
                        <td>{{ $row->record  }}m</td>
                        <td class="">{{ $row->fecha_record  }}</td>
                    </tr>
        @endforeach
        </tbody>
            </table>
    </div>
    <!--Paginación-->
    <div class="row paginado">
        {{ $rowset->links() }}
    </div>







@endsection
