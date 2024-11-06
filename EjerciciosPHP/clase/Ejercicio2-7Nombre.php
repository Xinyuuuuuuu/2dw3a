<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Nombre y Apellidos</title>
</head>
<body>
    <?php
        $nombre1 = "Dani"; 
        $apellido1 = "Lekue";   
        $apellido2 = "Alkorta"; 

        const NOMBREPERMITIDO = "Elisabet Lekue Alkorta";

        $nombreCompleto = "$nombre1 $apellido1 $apellido2";

        if ($nombreCompleto === NOMBREPERMITIDO) {
            print "Bienvenida, $nombreCompleto";
        } else {
            print "Acceso denegado, apellido incorrecto $nombre1";
        }
    ?>
</body>
</html>
