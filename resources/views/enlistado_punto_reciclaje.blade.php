@extends('layout')


@section('content')
<div class="container">
    <h2 class="center-align">Listado de Puntos</h2>
    <div>
        <table>
            <thead>
                <tr>
                    @if(Auth::user()->rol == 'admin')
                        <th>ID</th>
                    @endif
                    <th>TIPO</th>
                    <th>DIRECCION</th>
                    <th>HORA APERTURA</th>
                    <th>HORA CIERRE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($puntos as $p)
                <tr>
                    @if(Auth::user()->rol == 'admin')
                        <td><a href="{{route('editar_punto_vista',$p->id)}}">{{$p->id}}</a></td>
                    @endif
                    <td>{{$p->tipo}}</td>
                    <td>{{$p->direccion}}</td>
                    <td>{{$p->hora_apertura}}</td>
                    <td>{{$p->hora_cierre}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')

@endpush