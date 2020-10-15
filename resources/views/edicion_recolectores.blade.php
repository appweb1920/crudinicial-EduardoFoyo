<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('home')}}">HOME</a>
    <div>
        <h1>Detalles de Recolector</h1>
        <form action="{{route('editar_recolector')}}" method="GET">
            <label for="">Nombre</label>
            <input type="hidden" name="id" value="{{$recolectores->id}}">
            <input type="text" name="nombre" value="{{$recolectores->nombre}}" id="">
            <div class="weekDays-selector">
                <input type="checkbox" name="lunes" id="lunes" />
                <label>L</label>
                <input type="checkbox" name="martes" id="martes"/>
                <label>M</label>
                <input type="checkbox" name="miercoles" id="miercoles"/>
                <label>M</label>
                <input type="checkbox" name="jueves" id="jueves"/>
                <label>J</label>
                <input type="checkbox" name="viernes" id="viernes"/>
                <label>V</label>
                <input type="checkbox" name="sabado" id="sabado"/>
                <label>S</label>
                <input type="checkbox" name="domingo" id="domingo"/>
                <label>D</label>
              </div>
            <input type="submit" value="Enviar">
        </form>
        <h2>Crear Relacion</h2>
        <form action="{{route('crea_relacion')}}" method="get">
            <input type="hidden" name="id" value="{{$recolectores->id}}">
            <select name="punto_reciclaje" id="">
                <option value="">Elige una opcion...</option>
                @foreach ($puntos as $p)
                <option value="{{$p->id}}">{{$p->tipo}}</option>
                @endforeach
            </select>
            <input type="submit" value="Agregar">
        </form>
    </div>
</body>
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
    });
</script>
</html>