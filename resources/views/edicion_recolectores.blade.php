@extends('layout')


@section('content')
<div class="container">
    <div>
        <button id="elimina_recolector" class="right btn-floating btn-large waves-effect waves-light red">
            <i class="material-icons">delete</i>
                      </button>
        <h2 class="center-align">Detalles de Recolector</h2>
    </div>
    <form action="{{route('editar_recolector')}}" method="GET">
        <label for="">Nombre</label>
        <input type="hidden" name="id" value="{{$recolectores->id}}">
        <input type="text" name="nombre" value="{{$recolectores->nombre}}" id="">
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

        <h3 class="center-align">Crear Relacion</h3>
        <form action="{{route('crea_relacion')}}" method="get">
            <input type="hidden" name="id" value="{{$recolectores->id}}">
            <div>
                <select name="punto_reciclaje" class="browser-default" id="">
                    <option value="" disabled selected>Elige una opcion...</option>
                    @foreach ($puntos as $p)
                    <option value="{{$p->id}}">{{$p->tipo}}</option>
                    @endforeach
                </select>
            </div>
            <div class="center-align">
            <button class="btn waves-effect waves-light" type="submit" name="action">
                Enlazar
              </button>
        </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script
src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>

<script>
$( document ).ready(function() {
    let dias = "{{$recolectores->dias_recoleccion}}"
    let dias_formateados = dias.split(",");
    dias_formateados.forEach(element => {
        if (element!=="") {
            $("#"+element).prop('checked', true);  
        }
    });
    $("#elimina_recolector").click(function () {
        var txt;
        if (confirm("¿Estas seguro de que quieres Eliminar?")) {
            window.location.replace("{{route('elimina_recolector',$recolectores->id)}}");
        }
    });
    $(document).ready(function(){
    $('select').formSelect();
  });
});
</script>
@endpush
