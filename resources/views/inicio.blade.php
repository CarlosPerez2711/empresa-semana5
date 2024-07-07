<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Página de Inicio</h1>
    <nav>
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('personas') }}">Personas</a>
        <a href="{{ route('contacto') }}">Contacto</a>
    </nav>
</body>
</html>
