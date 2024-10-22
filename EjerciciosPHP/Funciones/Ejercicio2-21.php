<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de la Media Aritmética</title>
</head>
<body>
    <h1>Calculadora de Media Aritmética</h1>

    <?php
   function mediaAritmetica($num1, $num2) {
    $media = ($num1 + $num2) / 2;
    echo "La media aritmética de $num1 y $num2 es: $media";
    }

    mediaAritmetica(10, 20);

    ?>
</body>
</html>
