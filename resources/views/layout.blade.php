<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Reciclaje</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @stack('styles')
</head>

<body class="">
    <nav>
        <div class="nav-wrapper 80cbc4 teal lighten-3">
            <a href="{{route('home')}}" id="" class="brand-logo right"><i class="material-icons">home</i></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="{{route('crear_punto_vista')}}">Agrega Punto</a></li>
                <li><a href="{{route('lista_punto_vista')}}">Listado de Puntos</a></li>
                <li><a href="{{route('crear_recolector_vista')}}">Agrega Recolectores</a></li>
                <li><a href="{{route('lista_recolector_vista')}}">Listado de Recolectores</a></li>
                <li><a href="{{route('lista_relacion')}}">Listado de Relaciones</a></li>
            </ul>
        </div>
    </nav>
    @yield('header')
    

    @yield('content')
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    @stack('scripts')
</body>
</html>