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
        <h1>Agrega Recolector</h1>
        <form action="{{route('crear_recolector')}}" method="GET">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="">
            <div class="weekDays-selector">
                <input type="checkbox" name="lunes" />
                <label for="weekday-mon">L</label>
                <input type="checkbox" name="martes" />
                <label for="weekday-tue">M</label>
                <input type="checkbox" name="miercoles" />
                <label for="weekday-wed">M</label>
                <input type="checkbox" name="jueves" />
                <label for="weekday-thu">J</label>
                <input type="checkbox" name="viernes" />
                <label for="weekday-fri">V</label>
                <input type="checkbox" name="sabado" />
                <label for="weekday-sat">S</label>
                <input type="checkbox" name="domingo" />
                <label for="weekday-sun">D</label>
              </div>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>