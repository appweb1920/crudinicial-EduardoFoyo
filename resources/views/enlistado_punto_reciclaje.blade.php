<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Puntos</h1>
    <ul>
        @foreach ($puntos as $p)
        <li>
            <a href="{{route('editar_punto_vista',$p->id)}}">{{$p->id}} {{$p->tipo}} {{$p->director}} {{$p->hora_apertura}} {{$p->hora_cierre}}</a>
        </li>
        @endforeach
    </ul>
</body>
</html>