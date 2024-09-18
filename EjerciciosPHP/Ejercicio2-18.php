<?php
    // Crear un array con 10 títulos de películas
    $peliculas = array(
        "El Padrino",
        "Pulp Fiction",
        "Forrest Gump",
        "El Señor de los Anillos",
        "Star Wars",
        "Matrix",
        "Gladiator",
        "Jurassic Park",
        "Titanic",
        "El Caballero Oscuro"
    );

    // Ordenar el array alfabéticamente
    sort($peliculas);

    // Mostrar el array ordenado usando print_r()
    echo "<pre>";
    print_r($peliculas);
    echo "</pre>";
?>
