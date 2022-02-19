@extends('layouts.app')

@section('content')



    <h3>
        <a href="{{ route('home') }}" title="Inicio">Inicio</a> <span>| Clasificacion</span>
    </h3>
    <div class="row">



            <table class="striped centered">
                <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Frutas</th>
                    <th>Enemigos</th>
                    <th>Última distancia</th>
                    <th>Número de partidas</th>
                    <th>Record</th>
                    <th>Fecha record</th>
                </tr>
                </thead>


        @foreach ($rowset as $row)


                    <tr>
                        <td>{{ $row->usuario  }}</td>
                        <td>{{ $row->frutas  }}</td>
                        <td>{{ $row->enemigos  }}</td>
                        <td>{{ $row->ult_distancia  }}m</td>
                        <td>{{ $row->numero_partidas  }}</td>
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
