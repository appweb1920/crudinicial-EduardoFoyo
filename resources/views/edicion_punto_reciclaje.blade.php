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
        <h1>Detalles de Puntos de Reciclaje</h1>
        <form action="{{route('editar_punto')}}" method="GET">
            <input type="hidden" name="id" value="{{$punto->id}}">
            <label for="">Tipo</label>
            <input type="text" name="tipo" value="{{$punto->tipo}}" id="">
            <label for="">Direccion</label>
            <input type="text" name="direccion" value="{{$punto->direccion}}" id="">
            <label for="">Hora Apertura</label>
            <input type="time" id="" name="apertura" value="{{$punto->hora_apertura}}" min="00:00" max="24:00" >
            <label for="">Hora Cierre</label>
            <input type="time" id="" name="cierre" value="{{$punto->hora_cierre}}" min="00:00" max="24:00">
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>