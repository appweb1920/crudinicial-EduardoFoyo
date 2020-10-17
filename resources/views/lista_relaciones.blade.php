@extends('layout')


@section('content')
<div class="container">
    <h2 class="center-align">Listado de Relaciones</h2>
    <div>
        <table>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>TIPO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($relacion as $r)
                <tr>
                    @foreach ($r->recolector as $recolector)
                        <td>{{$recolector->nombre}}</td>
                    @endforeach

                    @foreach ($r->punto as $punto)
                        <td>{{$punto->tipo}}</td>
                    @endforeach 
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')

@endpush