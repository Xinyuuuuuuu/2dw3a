
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de Alumnos</title>
</head>
<body>
<?php
    $frutas = array("naranja", "platano");

    array_push($frutas, "limon", "manzana", "aguacate", "tomate", "pera", "sandia", "melón", "kaki", "papaya");

    echo "<pre>";
    print_r($frutas);
    echo "</pre>";
?>
</body>
</html>
