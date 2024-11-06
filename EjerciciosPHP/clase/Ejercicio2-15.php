<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas de los Alumnos</title>
</head>
<body>
    <?php
      
        $notas = array(
            "Iker" => "3.5", 
            "Martina" => "7", 
            "Anurag" => "6.3"
        );
        
        echo "<h2>Mostrar notas de uno en uno:</h2>";
        echo "<p>Iker: " . $notas["Iker"] . "</p>";
        echo "<p>Martina: " . $notas["Martina"] . "</p>";
        echo "<p>Anurag: " . $notas["Anurag"] . "</p>";

        echo "<h2>Mostrar notas utilizando foreach:</h2>";
        foreach ($notas as $nombre => $nota) {
            echo "<p>$nombre: $nota</p>";
        }

        echo "<h2>Claves del array:</h2>";
        foreach (array_keys($notas) as $clave) {
            echo "<p>$clave</p>";
        }

        $claves = array_keys($notas);
        echo "<h2>La clave del segundo elemento es: " . $claves[1] . "</h2>";
    ?>
</body>
</html>
