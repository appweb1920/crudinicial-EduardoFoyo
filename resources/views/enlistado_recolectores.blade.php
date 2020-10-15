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
    <h1>Listado de Recolectores</h1>
    <ul>
        @foreach ($recolector as $p)
        <li>
            <a href="{{route('editar_recolector_vista',$p->id)}}">{{$p->nombre}} {{$p->director}} {{$p->dias_recoleccion}} {{$p->hora_cierre}}</a>
        </li>
        @endforeach
    </ul>
</body>
</html>