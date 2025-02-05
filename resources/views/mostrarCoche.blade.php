<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Información del Coche</title>
    <style> body {
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
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background-color: #fff;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        a {
            text-decoration: none;
            color: #0066cc;
        }
        .matricula {
            font-weight: bold;
            font-size: 1.2em;
        }
        .buttons {
            margin-top: 10px;
        }
        button {
            padding: 5px 10px;
            margin-right: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .edit-btn {
            background-color: #4CAF50;
            color: white;
        }
        .delete-btn {
            background-color: #f44336;
            color: white;
        }
        .create-btn {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            background-color: #008CBA;
            color: white;
            text-align: center;
            border-radius: 5px;
        }</style>
</head>
<body>
    <h1>Detalles del coche</h1>
    <ul>
        <li>Matrícula: {{ $coches->matricula }}</li>
        <li>Modelo: {{ $coches->modelo }}</li>
        <li>Color: {{ $coches->color }}</li>
    </ul>
</body>
</html>
