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
        <h1>Agrega Punto de Reciclaje</h1>
        <form action="{{route('crear_punto')}}" method="GET">
            <label for="">Tipo</label>
            <input type="text" name="tipo" id="">
            <label for="">Direccion</label>
            <input type="text" name="direccion" id="">
            <label for="">Hora Apertura</label>
            <input type="time" id="" name="apertura" min="00:00" max="24:00" >
            <label for="">Hora Cierre</label>
            <input type="time" id="" name="cierre" min="00:00" max="24:00">
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>