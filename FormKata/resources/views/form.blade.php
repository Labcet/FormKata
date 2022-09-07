<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">

        <form method="POST" action="{{url('store-form')}}">
            @csrf
            <label>Nombre</label>
            <input type="text" name="nombre"><br>
            <label>Funcionalidad</label>
            <input type="text" name="funcionalidad"><br>
            <label>Tipo prueba</label>
            <input type="text" name="tipo_prueba"><br>
            <label>Precondiciones</label>
            <input type="text" name="precondiciones"><br>
            <label>Pasos</label>
            <input type="text" name="pasos"><br>
            <label>Ola</label>
            <input type="text" name="ola"><br>
            <label>Resultado</label>
            <input type="text" name="resultado"><br>
            <label>Aprobador</label>
            <input type="text" name="aprobador"><br>
            <input type="submit" name="enviar"><br>
        </form>
    </body>
</html>
