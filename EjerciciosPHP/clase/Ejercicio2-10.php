<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares entre 5 y 50</title>
</head>
<body>

    <h1>Números pares entre 5 y 50</h1>

    <p>
        <?php
            $pares = "";

            for ($i = 5; $i <= 50; $i++) {
                if ($i % 2 == 0) {
                    $pares .= $i . ", ";
                }
            }
            $pares = rtrim($pares, ", ");

            print $pares;
        ?>
    </p>

</body>
</html>
