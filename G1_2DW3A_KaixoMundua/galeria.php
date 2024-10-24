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
        ['src' => 'galeria/Galeria02.jpg', 'tags' => ['natura']],
        ['src' => 'galeria/Galeria03.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria04.jpg', 'tags' => ['natura']],
        ['src' => 'galeria/Galeria05.jpg', 'tags' => ['natura']],
        ['src' => 'galeria/Galeria06.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria07.jpg', 'tags' => ['natura']],
        ['src' => 'galeria/Galeria08.jpg', 'tags' => ['narrastiak']],
        ['src' => 'galeria/Galeria09.jpg', 'tags' => ['natura','mamiferoak']],
        ['src' => 'galeria/Galeria10.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria11.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria12.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria13.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria14.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria15.jpg', 'tags' => ['mamiferoak', 'karraskariak']],
        ['src' => 'galeria/Galeria16.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria17.jpg', 'tags' => ['mamiferoak', 'karraskariak']],
        ['src' => 'galeria/Galeria18.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria19.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria20.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria21.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria22.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria23.jpg', 'tags' => ['narrastiak']],
        ['src' => 'galeria/Galeria24.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria25.jpg', 'tags' => ['hegaztiak']],
        ['src' => 'galeria/Galeria26.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria27.jpg', 'tags' => ['natura']],
        ['src' => 'galeria/Galeria28.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria29.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria30.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria31.jpg', 'tags' => ['mamiferoak']],
        ['src' => 'galeria/Galeria32.jpg', 'tags' => ['narrastiak']],

    ];

    ?>

    <!-- Barra de búsqueda fija -->
    <div class="search-bar-container">
        <div class="content-width">
            <div class="search-bar-wrapper">
                <img src="img/icons/search-icon.png" alt="Icono de búsqueda" class="search-icon">
                <input type="text" id="search-bar"
                    placeholder="Probatu bilatzen mamiferoak, hegaztiak, karraskariak, narrastiak, natura, intsektuak...">
                <!-- Contenedor para las sugerencias -->
                <ul id="suggestions-list" class="suggestions-list"></ul>
            </div>
        </div>
    </div>

    <!-- Contenedor de la galería -->
    <div class="content-width">
        <div class="gallery-container">
            <?php foreach ($imagenes as $imagen): ?>
                <div class="gallery-item" data-tags="<?php echo implode(' ', $imagen['tags']); ?>">
                    <img src="img/<?php echo $imagen['src']; ?>" alt="Imagen de galería">
                    <div class="tags-overlay">
                        <?php echo '#' . implode(' #', $imagen['tags']); ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php
    include('php/footer.php');  // Incluimos el footer
    ?>

    <!-- Incluir los scripts -->
    <script src="scripts/search.js"></script>
    <script src="scripts/galleryHeader.js"></script>
</body>

</html>