<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas de Nivel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        h1, h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        h2 {
            color: #28a745;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            font-size: 16px;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $nombre = htmlspecialchars($_POST['nombre']);
            $apellido = htmlspecialchars($_POST['apellido']);
            $nivel = htmlspecialchars($_POST['nivel']);
            
            $preguntasNivel1 = [
                "¿Qué planeta es el más cercano al Sol?" => "mercurio",
                "¿El símbolo 'O' a qué elemento pertenece?" => "oxigeno",
                "¿Cuál es el río más largo del mundo?" => "nilo",
            ];

            $preguntasNivel2 = [
                "¿Quién es el autor de 'Don Quijote'?" => "cervantes",
                "¿Cuál es la capital de Francia?" => "paris",
                "¿Cuántas patas tiene una araña?" => "ocho",
            ];

            // Seleccionar preguntas según el nivel seleccionado
            $preguntas = ($nivel == 1) ? $preguntasNivel1 : $preguntasNivel2;

            echo "<h1>Preguntas de {$nivel}. nivel</h1>";
            echo "<h2>{$nombre} {$apellido}</h2>";
            ?>

            <form action="Prueba2425resultados.php" method="POST">
                <?php
                    foreach ($preguntas as $pregunta => $respuestaCorrecta) {
                        echo '<div class="form-group">';
                        echo "<label>$pregunta</label>";
                        echo "<input type='text' name='respuestas[]' required>";
                        echo "<input type='hidden' name='preguntas[]' value='". htmlspecialchars($pregunta) ."'>"; // Asegúrate de usar htmlspecialchars
                        echo '</div>';
                    }
                ?>
                <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
                <input type="hidden" name="apellido" value="<?php echo $apellido; ?>">
                <input type="hidden" name="nivel" value="<?php echo $nivel; ?>">
                <button type="submit">Enviar</button>
            </form>

    </div>
    <?php include 'footer.php'; ?>
</body>

</html>
