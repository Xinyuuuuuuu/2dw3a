<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cada llamada suma 1</title>
</head>
<body>
    <h1>Cada llamada suma 1</h1>

    <?php
    function incrementarContador() {
        static $contador = 0;

        $contador++;

        echo "<p>Valor del contador: $contador</p>";
    }

    incrementarContador(); 
    incrementarContador(); 
    incrementarContador(); 
?>

</body>
</html>
