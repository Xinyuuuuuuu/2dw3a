<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de una unidad</title>
</head>
<body>
    <h1>Te sumo uno</h1>

    <?php
    function sumarUnidad(&$numero) {
        $numero += 1;  
    }

    $miNumero = 10;
    echo "<p>El valor inicial de la variable es: $miNumero</p>";

    sumarUnidad($miNumero);

    echo "<p>El valor de la variable después de sumar una unidad es: $miNumero</p>";
    ?>

</body>
</html>
