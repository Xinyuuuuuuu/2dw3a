<!DOCTYPE html>
<html lang="es">
<head>
     <!-- ESTA PAGINA ES SOLO PARA QUE APAREZCAN LOS TRES BOTONES DESPUES DE QUE SE HACE EL LOGIN-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Botones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }

        .button {
            display: inline-block;
            padding: 15px 30px;
            font-size: 16px;
            color: #fff;
            background-color: orange;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin: 10px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #c77d00;
        }
    </style>
</head>
<body>

    <a href="nuevo.php" class="button">Insertar nuevo libro</a>
    <a href="consulta.php" class="button">Consulta de libros</a>
    <a href="buscador.php" class="button">Buscador</a>

</body>
</html>
