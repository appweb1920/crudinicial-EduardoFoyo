@extends('layout')


@section('content')
    <div class="container">
        <h2 class="center-align">Agrega Punto de Reciclaje</h2>
        <form action="{{route('crear_punto')}}" method="GET">
            <label for="">Tipo</label>
            <input type="text" name="tipo" id="">
            <label for="">Direccion</label>
            <input type="text" name="direccion" id="">
            <div class="row">
                <div class="col s6">
                    <label for="">Hora Apertura</label>
                    <input type="time" id="" name="apertura" min="00:00" max="24:00" >
                </div>
                <div class="col s6">
                    <label for="">Hora Cierre</label>
                    <input type="time" id="" name="cierre" min="00:00" max="24:00">
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

@endpush