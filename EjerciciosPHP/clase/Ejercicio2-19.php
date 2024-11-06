<?php
    $paises = array('alemania', 'rumania', 'italia', 'chile', 'uruguay', 'australia');

    unset($paises[0]);

    unset($paises[3]);

    unset($paises[5]);

    $paises = array_values($paises);

    array_push($paises, 'argentina', 'bolivia');

    sort($paises);

    echo "<pre>";
    print_r($paises);
    echo "</pre>";
?>

