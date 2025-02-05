<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Coche</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f0f0f0;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 3px;
            font-size: 1em;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 1em;
        }
        button:hover {
            background-color: #45a049;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<h1>Editar Coche</h1>
<form action="{{ route('coches.update', $coche->matricula) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" value="{{ $coche->matricula }}" readonly>
    </div>
    <div>
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="{{ $coche->modelo }}" required>
    </div>
    <div>
        <label for="color">Color:</label>
        <input type="text" id="color" name="color" value="{{ $coche->color }}" required>
    </div>
    <button type="submit">Actualizar Coche</button>
</form>
<a href="{{ route('coches.index') }}">Volver al listado</a>
</body>
</html>
