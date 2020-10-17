@extends('layout')


@section('content')
<div class="container">
    <div class="">
        <button id="elimina_punto" class="right btn-floating btn-large waves-effect waves-light red">
            <i class="material-icons">delete</i>
                      </button>
        <h2 class="center-align">Detalles de Puntos de Reciclaje</h2>
    </div>
    <form action="{{route('editar_punto')}}" method="GET">
        <input type="hidden" name="id" value="{{$punto->id}}">
        <label for="">Tipo</label>
        <input type="text" name="tipo" value="{{$punto->tipo}}" id="">
        <label for="">Direccion</label>
        <input type="text" name="direccion" value="{{$punto->direccion}}" id="">
        <div class="row">
            <div class="col s6">
                <label for="">Hora Apertura</label>
                <input type="time" id="" name="apertura" value="{{$punto->hora_apertura}}" min="00:00" max="24:00" >
            </div>
            <div class="col s6">
                <label for="">Hora Cierre</label>
                <input type="time" id="" name="cierre" value="{{$punto->hora_cierre}}" min="00:00" max="24:00">
            </div>
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
<script
src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script>
    $("#elimina_punto").click(function () {
        var txt;
        if (confirm("¿Estas seguro de que quieres Eliminar?")) {
            window.location.replace("{{route('elimina_punto',$punto->id)}}");
        }
    });
</script>
@endpush
