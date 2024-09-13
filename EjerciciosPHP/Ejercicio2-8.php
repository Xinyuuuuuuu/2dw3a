<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <?php
        $num = 5; 
        print "<h1>Tabla de multiplicar del número $num</h1>";

       
        for ($a = 1; $a <= 10; $a++) {
           
            $resultado = $num * $a;
            
            print "$num x $a = $resultado <br>";
        }
    ?>
</body>
</html>
