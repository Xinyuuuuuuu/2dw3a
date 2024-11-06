<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Caza del Arcoíris</title>
    <style>
        .color {
            font-weight: bold;
        }
        .rojo { color: red; }
        .naranja { color: orange; }
        .amarillo { color: yellow; }
        .verde { color: green; }
        .azul { color: blue; }
        .añil { color: indigo; }
        .violeta { color: violet; }
    </style>
</head>
<body>
    <h1>Juego de Caza del Arcoíris</h1>

    <?php
    $coloresArcoiris = [
        "rojo" => "rojo", 
        "naranja" => "naranja", 
        "amarillo" => "amarillo", 
        "verde" => "verde", 
        "azul" => "azul", 
        "añil" => "añil", 
        "violeta" => "violeta"
    ];
    $coloresCazados = [];

    $juegoTerminado = false;

    while (!$juegoTerminado && count($coloresCazados) < 7) {
        $nube = rand(0, 1);

        if ($nube) {
            // Elegir un color al azar que aún no haya sido cazado
            do {
                $colorIndex = array_rand($coloresArcoiris);
                $colorCazado = $colorIndex;
            } while (in_array($colorCazado, $coloresCazados));

            // Añadir el color cazado al array de colores cazados
            $coloresCazados[] = $colorCazado;

            // Mostrar el color cazado con su color correspondiente
                //<span class='color " . $coloresArcoiris[$colorCazado] . "'></span>
            echo "<p><span class='color " . $coloresArcoiris[$colorCazado] . "'>¡Has cazado el color $colorCazado !</span></p>";

            // Mostrar los colores cazados y los que quedan
            echo "<p>Colores cazados hasta ahora: " . implode(", ", $coloresCazados) . "</p>";
            $coloresRestantes = array_diff($coloresArcoiris, $coloresCazados);
            echo "<p>Colores restantes: " . implode(", ", $coloresRestantes) . "</p>";
        } else {
            echo "<p>Hay una nube. No has podido cazar ningún color en esta ronda.</p>";
        }

        $pajarraco = rand(0, 1); 

        if ($pajarraco) {
            echo "<p>¡Oh no! Ha aparecido el pajarraco y te ha derribado. El juego ha terminado.</p>";
            $juegoTerminado = true;
        } else {
            echo "<p>No ha aparecido el pajarraco. Puedes seguir jugando.</p><hr>";
        }
    }

    if (!$juegoTerminado && count($coloresCazados) == 7) {
        echo "<p>¡Felicidades! Has cazado todos los colores del arcoíris.</p>";
    }
    ?>

</body>
</html>
