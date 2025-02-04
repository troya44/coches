<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de Coches</h1>
    <ul>
        @foreach($coches as $coches)
            <li><a href="{{ route('mostrarCoche', $coches->matricula) }}">{{ $coches->matricula }}</a></li>
            <form action="{{ route('eliminar', $coches->matricula) }}" method="POST" style="display:inline;"
                  onsubmit="return confirm('¿Estás seguro de que quieres eliminar este coche?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar coche</button>
            </form>
        @endforeach
    </ul>

    <a href="{{ route('coches.create') }}">Crear Nuevo Coche</a></body>
</html>
