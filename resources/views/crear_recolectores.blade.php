@extends('layout')


@section('content')
<div class="container">
    <h1 class="center-align">Agrega Recolector</h1>
    
    <form action="{{route('crear_recolector')}}" method="GET">
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="">
        <Label>Dias de Recoleccion</Label>
        <div class="row">
            <label class="col s1">
                <input type="checkbox" name="lunes" />
                <span>L</span>
            </label>
            <label class="col s1">
                <input type="checkbox" name="martes" />
                <span>M</span>
            </label>
            <label class="col s1">
                <input type="checkbox" name="miercoles" />
                <span>M</span>
            </label>
            <label class="col s1">
                <input type="checkbox" name="jueves"/>
                <span>J</span>
            </label>
            <label class="col s1">
                <input type="checkbox" name="viernes" />
                <span>V</span>
            </label>
            <label class="col s1">
                <input type="checkbox" name="sabado" />
                <span>S</span>
            </label>
            <label class="col s1">
                <input type="checkbox" name="domingo" />
                <span>D</span>
            </label>
        </div>
        <div class="center-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">
                Guardar
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')

@endpush