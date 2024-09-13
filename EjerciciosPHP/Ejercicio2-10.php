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
            // Inicializamos una variable para almacenar los números pares
            $pares = "";

            // Bucle para recorrer los números entre 5 y 50
            for ($i = 5; $i <= 50; $i++) {
                // Verificar si el número es par
                if ($i % 2 == 0) {
                    // Si es par, lo añadimos a la cadena con una coma
                    $pares .= $i . ", ";
                }
            }

            // Eliminar la última coma y espacio para una salida correcta
            $pares = rtrim($pares, ", ");

            // Mostrar el resultado por pantalla
            print $pares;
        ?>
    </p>

</body>
</html>
