<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Llamado de emergencia</title>
</head>
<body>
    <p>Hola! acaba de generar una cita con Agrofor</p>
    <p>Estos son los datos de la cita:</p>
    <ul>
        <li>Nombre: {{ $nombre }}</li>
        <li>Fecha: {{ $fecha}}</li>
        <li>Hora:{{$hora}} </li>
    </ul>
    <p>Y esta es la direccion reportada:</p>
    <ul>
        <li>con esta descripción: {{$descripcion}}</li>
        <li>Y de tamaño: {{$hectareas}}</li>
        <li>
            <a href="https://www.google.com/maps/dir/">
                Ver en Google Maps
            </a>
        </li>
    </ul>
</body>
</html>