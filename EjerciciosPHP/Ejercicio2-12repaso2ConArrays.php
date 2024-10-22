<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinar el Número</title>
</head>
<body>

<?php
    $numero_secreto = 7;
    $max_intentos = 5;
    $numeros_intentados = array();

    echo "<h2>Adivina el número secreto (entre 1 y 10)</h2>";

    for ($intento = 1; $intento <= $max_intentos; $intento++) {
        // Generar un número aleatorio entre 1 y 10, que no se haya generado antes
        do {
            $numero_random = rand(1, 10);
        } while (in_array($numero_random, $numeros_intentados));
        
        // Guardar el número intentado en el array
        $numeros_intentados[] = $numero_random;

        echo "<p>Intento $intento: El número generado es $numero_random</p>";

        // Comprobar si es correcto
        if ($numero_random == $numero_secreto) {
            echo "<p><strong>¡Enhorabuena! Has acertado el número secreto ($numero_secreto) en el intento $intento.</strong></p>";
            break;
        } else {
            echo "<p>Intento fallido, probemos de nuevo.</p>";
        }

        // Si se alcanzan los intentos máximos sin acertar
        if ($intento == $max_intentos) {
            echo "<p><strong>Fin de los intentos. No has logrado adivinar el número secreto.</strong></p>";
        }
    }
?>

</body>
</html>
