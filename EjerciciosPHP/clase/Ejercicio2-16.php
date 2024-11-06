<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Alumnos</title>
</head>
<body>
    <?php
        // Crear la matriz multidimensional
        $alumnos = array(
            "Enara" => array(
                "apellidos" => "Arnaiz Alonso",
                "edad" => 19,
                "ciclo" => "DW3"
            ),
            "Nestor" => array(
                "apellidos" => "López Rodriguez",
                "edad" => 30,
                "ciclo" => "AS3"
            ),
            "Peio" => array(
                "apellidos" => "Hernando Gómez",
                "edad" => 27,
                "ciclo" => "DM3"
            )
        );

        // Mostrar los datos de los alumnos utilizando foreach
        echo "<h2>ALUMNOS:</h2>";
        foreach ($alumnos as $nombre => $datos) {
            echo "<p><strong>Nombre: $nombre</strong></p>";
            echo "<ul>";
            echo "<li>Apellidos: " . $datos["apellidos"] . "</li>";
            echo "<li>Edad: " . $datos["edad"] . "</li>";
            echo "<li>Ciclo: " . $datos["ciclo"] . "</li>";
            echo "</ul>";
        }
    ?>
</body>
</html>
