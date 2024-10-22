
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVA</title>
</head>
<body>
    <h1>IVA</h1>

    <?php
    function calcularIVA($precio, $iva = 21) {
        $importeIVA = $precio * ($iva / 100);

        return $precio + $importeIVA;
    }

    $precioProducto = 100; 
    $ivaProducto = 10; 

    $precioConIva = calcularIVA($precioProducto, $ivaProducto);
    echo "<p>El precio con un IVA del $ivaProducto% es: $precioConIva</p>";

    $precioConIvaPorDefecto = calcularIVA($precioProducto);
    echo "<p>El precio con un IVA por defecto del 21% es: $precioConIvaPorDefecto</p>";
    ?>

</body>
</html>