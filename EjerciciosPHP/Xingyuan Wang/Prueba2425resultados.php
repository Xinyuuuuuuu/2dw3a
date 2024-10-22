<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
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

        .result {
            margin-bottom: 15px;
            text-align: left;
        }

        .correct {
            color: green;
        }

        .incorrect {
            color: red;
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
            $respuestas = $_POST['respuestas'];
            $preguntas = $_POST['preguntas'];
            $nivel = htmlspecialchars($_POST['nivel']);

            $respuestasNivel1 = [
                "¿Qué planeta es el más cercano al Sol?" => "mercurio",
                "¿El símbolo 'O' a qué elemento pertenece?" => "oxigeno",
                "¿Cuál es el río más largo del mundo?" => "nilo"
            ];

            $respuestasNivel2 = [
                "¿Quién es el autor de 'Don Quijote'?" => "cervantes",
                "¿Cuál es la capital de Francia?" => "paris",
                "¿Cuántas patas tiene una araña?" => "ocho"
            ];

            $respuestasCorrectas = ($nivel == 1) ? $respuestasNivel1 : $respuestasNivel2;

            echo "<h1>Soluciones {$nivel}. nivel</h1>";
            echo "<h2>{$nombre} {$apellido}</h2>";

            // Comprobamos las respuestas
            for ($i = 0; $i < count($preguntas); $i++) {
                $pregunta = trim($preguntas[$i]); 

                if (isset($respuestasCorrectas[$pregunta])) {
                    $respuestaCorrecta = $respuestasCorrectas[$pregunta];
                } else {
                    echo "<strong>Error:</strong> La pregunta no tiene respuesta asignada.<br>";
                    continue;
                }

                $respuestaUsuario = strtolower(trim($respuestas[$i]));  // Convertimos a minúsculas y eliminamos espacios
               
                echo "<div class='result'>";
                echo "<strong>Pregunta:</strong> {$pregunta}<br>";
                echo "<strong>Tu respuesta:</strong> {$respuestas[$i]}<br>";

                if ($respuestaUsuario == $respuestaCorrecta) {
                    echo "<span class='correct'>Correcto</span><br>";
                } else {
                    echo "<span class='incorrect'>Incorrecto. La respuesta correcta es: {$respuestaCorrecta}</span><br>";
                }

                echo "</div>";
            }
        ?>
        <button onclick="window.location.href='Prueba2425.php'">Volver al inicio</button>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
