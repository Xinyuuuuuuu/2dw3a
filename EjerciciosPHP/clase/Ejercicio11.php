<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares entre 5 y 50 con while</title>
</head>
<body>

    <h1>Números pares entre 5 y 50 usando while</h1>

    <p>
        <?php
           
            $i = 5;
            $pares = ""; 

            while ($i <= 50) {
                if ($i % 2 == 0) {
                    $pares .= $i . ", ";
                }
                $i++;
            }

            $pares = rtrim($pares, ", ");

            print $pares;
        ?>
    </p>

</body>
</html>
