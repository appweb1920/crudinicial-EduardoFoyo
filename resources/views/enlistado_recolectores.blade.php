@extends('layout')


@section('content')
<div class="container">
    <h2 class="center-align">Listado de Recolectores</h2 >
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DIAS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recolector as $p)
                <tr>
                    <td><a href="{{route('editar_recolector_vista',$p->id)}}">{{$p->id}}</a></td>
                    <td>{{$p->nombre}}</td>
                    <td>{{str_replace(',',' ',$p->dias_recoleccion)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')

@endpush