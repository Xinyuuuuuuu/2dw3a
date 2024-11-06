<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinar el Número</title>
</head>
<body>

<?php
$intentos = 5;
$secret= 7;
$intentados= [];

for ($i = 1; $i <= $intentos; $i++ ) {
    do {
        $randNum = rand (1,10);
    }while (in_array( $randNum, $intentados ));

    $intentados[]= $randNum;

    if ($randNum==$secret){
        echo "acertado";
        break;
    }else{
            echo "fallado";
        }
    }


    if ($i >= $intentos) {
        echo "no quedan  intentos";
    }


?>

</body>
</html>
