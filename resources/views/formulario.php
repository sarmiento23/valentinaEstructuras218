<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        
    </head>
    <body>
        <h2>Inicio Matrices</h2>
        <form action="{{ url('formulario') }}" method="POST">
             {{ csrf_field() }}
            <input type="text" name="nombre">
            <input type="text" name="apellido">
            <input type="number" name="edad">
            <input type="text" name="curso">
            <input type="text" name="telefono">
            <input type="text" name="direccion">
            <br><button type="submit">Enviar</button>
        </form>
    </body>
</html>
