<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Array de países a los que te gustaría viajar
    $Mis_viajes_deseo = ["Japón", "Australia", "Canadá", "Italia", "Brasil"];

    // Arrays de países visitados en 2022 y 2023
    $PaisesVisitados2022 = ["Italia", "Francia", "Alemania"];
    $PaisesVisitados2023 = ["Canadá", "México", "Brasil"];

    // Unimos los arrays de países visitados en 2022 y 2023 en un solo array
    $VisitadosTodos = array_merge($PaisesVisitados2022, $PaisesVisitados2023);

    // Eliminamos del array de deseos los países que ya se han visitado
    $Mis_viajes_deseo = array_diff($Mis_viajes_deseo, $VisitadosTodos);

    // Ordenamos alfabéticamente el array de deseos actualizado
    sort($Mis_viajes_deseo);

    // Mostramos el array resultante en pantalla
    echo "Países que aún deseas visitar:\n";
    foreach ($Mis_viajes_deseo as $pais) {
        echo "- $pais\n";
    }
    ?>


</body>

</html>