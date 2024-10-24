<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Logo_Blanco.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">

    <title>Basalia</title>

</head>


<body>
    <?php
    $page = 'galeria'; // Variable para identificar la página
    include('php/header.php');  // Incluimos el header
    ?>

    <?php $imagenes = [
        ['src' => 'galeria/Galeria01.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria02.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria03.jpg', 'tags' => ['karraskariak', 'mamiferoa']],
        ['src' => 'galeria/Galeria04.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria05.jpg', 'tags' => ['natura']],
        ['src' => 'galeria/Galeria06.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria07.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria08.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria09.jpg', 'tags' => ['natura']],
        ['src' => 'galeria/Galeria10.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria11.jpg', 'tags' => ['natura']],
        ['src' => 'galeria/Galeria12.jpg', 'tags' => ['narrastiak']],
        ['src' => 'galeria/Galeria13.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria14.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria15.jpg', 'tags' => ['mamiferoak', 'karraskariak']],
        ['src' => 'galeria/Galeria16.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria17.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria18.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria19.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria20.jpg', 'tags' => ['narrastiak']],
        ['src' => 'galeria/Galeria21.jpg', 'tags' => ['natura']],
        ['src' => 'galeria/Galeria22.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria23.jpg', 'tags' => ['natura']],
        ['src' => 'galeria/Galeria24.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria25.jpg', 'tags' => ['narrastiak']],
        ['src' => 'galeria/Galeria26.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria27.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria28.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria29.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria30.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria31.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria32.jpg', 'tags' => ['hegaztiak']],

    ];

    ?>


   <!-- Barra de búsqueda fija pegada al header -->
<div class="search-bar-container">
    <img src="img/icons/search-icon.png" alt="Icono de búsqueda" class="search-icon">
    <input type="text" id="search-bar" placeholder="Probatu bilatzen mamiferoak, hegaztiak, karraskariak, narrastiakk, natura, intsektuak..." onkeyup="filtrarImagenes()">
</div>



    <!-- Contenedor de la galería -->
    <div class="gallery-container">
        <?php foreach ($imagenes as $imagen): ?>
            <div class="gallery-item" data-tags="<?php echo implode(' ', $imagen['tags']); ?>">
                <img src="img/<?php echo $imagen['src']; ?>" alt="Imagen de galería">
            </div>
        <?php endforeach; ?>
    </div>

    <script>
        // Función de filtrado
        function filtrarImagenes() {
            var input = document.getElementById('search-bar').value.toLowerCase();
            var items = document.getElementsByClassName('gallery-item');

            for (var i = 0; i < items.length; i++) {
                var tags = items[i].getAttribute('data-tags').toLowerCase();
                if (tags.includes(input) || input === "") {
                    items[i].style.display = "block";
                } else {
                    items[i].style.display = "none";
                }
            }
        }
    </script>
    <script>
        // Añadir una clase específica al header después de cargar
        document.querySelector('header').classList.add('header-gallery');
    </script>
    <?php
    include('php/footer.php');  // Incluimos el footer
    ?>

</body>