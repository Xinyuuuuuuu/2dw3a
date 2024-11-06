<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cazando los Colores del Arco Iris</title>
</head>
<body>

    <h1>¡A Cazar los Colores del Arco Iris!</h1>

    <?php
        $colores_arcoiris = ["rojo", "naranja", "amarillo", "verde", "azul", "índigo", "violeta"];
        $colores_cazados = []; 

        while (count($colores_cazados) < 7) {
            $nube_o_color = mt_rand(0, 1);  
            if ($nube_o_color == 1) {
                $color_cazado = $colores_arcoiris[mt_rand(0, 6)];  

                if (!in_array($color_cazado, $colores_cazados)) {
                    $colores_cazados[] = $color_cazado;
                    echo "<p style='color: $color_cazado;'>¡Has cazado el color $color_cazado!</p>";
                } else {
                    echo "<p>Ya has cazado el color $color_cazado. Sigamos cazando...</p>";
                }

                echo "<p>Colores cazados hasta ahora: " . implode(", ", $colores_cazados) . "</p>";
                
                $colores_restantes = array_diff($colores_arcoiris, $colores_cazados);
                if (count($colores_restantes) > 0) {
                    echo "<p>Colores restantes: " . implode(", ", $colores_restantes) . "</p>";
                } else {
                    echo "<p>¡No quedan colores por cazar!</p>";
                }

            } else {
                echo "<p>¡Hay una nube! No has podido cazar un color esta vez.</p>";
            }

            $pajarraco_aparece = mt_rand(0, 1); 

            if ($pajarraco_aparece == 1) {
                echo "<p><strong>¡Oh no! El pajarraco apareció y te derribó. ¡Juego terminado!</strong></p>";
                break;
            }

            if (count($colores_cazados) == 7) {
                echo "<p><strong>¡Felicidades! Has cazado todos los colores del arco iris.</strong></p>";
            }
        }
    ?>

</body>
</html>
