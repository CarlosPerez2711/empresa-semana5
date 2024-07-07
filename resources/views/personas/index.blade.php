<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>
<body>
    <h1>Listado de Personas</h1>
    <nav>
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('personas') }}">Personas</a>
        <a href="{{ route('contacto') }}">Contacto</a>
    </nav>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Fecha de Nacimiento</th>
                <th>Edad</th>
                <th>Sueldo</th>
                <th>Estado</th>
                <th>Sexo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->nPerCodigo }}</td>
                    <td>{{ $persona->cPerApellido }}</td>
                    <td>{{ $persona->cPerNombre }}</td>
                    <td>{{ $persona->cPerDireccion }}</td>
                    <td>{{ $persona->dPerFecNac }}</td>
                    <td>{{ $persona->nPerEdad }}</td>
                    <td>{{ $persona->nPerSueldo }}</td>
                    <td>{{ $persona->nPerEstado }}</td>
                    <td>{{ $persona->cPerSexo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Agregar enlaces de paginación -->
    {{ $personas->links() }}
</body>
</html>

