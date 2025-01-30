<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Coche</title>
</head>
<body>
<h1>Crear Nuevo Coche</h1>
<form action="{{ route('coches.store') }}" method="POST">
    @csrf
    <div>
        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" required>
    </div>
    <div>
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required>
    </div>
    <div>
        <label for="color">Color:</label>
        <input type="text" id="color" name="color" required>
    </div>
    <button type="submit">Guardar Coche</button>
</form>
</body>
</html>
