<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Array en PHP</title>
</head>
<body>
<h1>Suma de Array en PHP</h1>
    <?php
        $numeros = array(3, 7, 12, 5, 8, 21, 14, 9, 19, 6);
        
        $suma = array_sum($numeros);
        
        print "<p>Los valores del array son: " . implode(", ", $numeros) . "</p2>";

        print "<p>La suma de los valores del array es: $suma</p>";
    ?>
</body>
</html>
