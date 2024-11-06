<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Nombre y Apellidos</title>
</head>
<body>
    <?php
        $nombre1 = "Beñat Lekue Alkorta";
        $nombre2 = "Marina Aba Mendoza";
        $nombre3 = "Peio Marin Dz";
        $nombre4 = "Elisabet Gi Aorta";

        $nombres = [$nombre1, $nombre2, $nombre3, $nombre4];
       
        foreach ($nombres as $nombreCompleto) {
            $partes = explode(' ', $nombreCompleto);
            $nombre = $partes[0]; // Primer nombre
            $apellidos = $partes[1] . " " . $partes[2]; // Apellidos concatenados

            
            if ($nombre === "Elisabet" || $apellidos === "Lekue Alkorta") {
                print "Bienvenida, $nombreCompleto <br>";
            } else {
                print "Acceso denegado para $nombreCompleto <br>";
            }
        }
    ?>
</body>
</html>
