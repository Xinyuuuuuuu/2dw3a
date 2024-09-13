<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinar el Número</title>
</head>
<body>

    <h1>Juego de Adivinar el Número Secreto</h1>

    <?php
        $numero_secreto = 7;
        for ($intento = 1; $intento <= 5; $intento++) {
            $numero_aleatorio = rand(1, 10);
            
            print "<p>Intento $intento: El número generado es $numero_aleatorio.</p>";
            
            if ($numero_aleatorio == $numero_secreto) {
                print "<p><strong>¡Enhorabuena! Has adivinado el número secreto $numero_secreto.</strong></p>";
                break;
            } else {
                print "<p>Intento fallido, probemos de nuevo.</p>";
            }
            
            if ($intento == 5) {
                print "<p><strong>Fin de las rondas. No has adivinado el número secreto.</strong></p>";
            }
        }
    ?>


























</body>
</html>
