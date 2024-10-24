<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Basalia</title>

</head>
<body>

    
    <!-- Cargamos el header de forma dinámica -->
    <?php include 'php/header.php'; ?>

    <!-- Texto que aparece encima de la imagen del comienzo -->
    <section class="zona3">
    <div class="texto-encima">
        <h1>GURE ANIMALIAK</h1><br>
        <p>Sekzio honetan ikusi dezakezu Basalia-n dauzkagun animaliak, haien espezieak eta deskribapen bat animali horri buruz hain zuzen. </p>
    </div>
    </section>


    <?php include 'php/consultaAnimaliak.php' ?>
    <?php if (!empty($animales)): ?>
    <div class="animal-contenedor">
        <?php foreach ($animales as $especie => $listaAnimales): ?>
            <section class="animal-raza">
                <h1><?php echo htmlspecialchars($especie); ?></h1>

                <?php foreach ($listaAnimales as $animal): ?>
                    <section class="animal-fila">
                        <div class="animal-izquierda">
                            <img src="img/animaliak/<?php echo htmlspecialchars($animal['img']); ?>" alt="Imagen de <?php echo htmlspecialchars($animal['izena']); ?>" class="animal-imagen">
                            <div class="animal-info">
                                <div class="animal-nombre"><?php echo htmlspecialchars($animal['izena']); ?></div>
                                <div class="animal-detalles">
                                    <p><strong>Espeziea:</strong> <?php echo htmlspecialchars($animal['espeziea']); ?></p>
                                    <p><strong>Genero:</strong> <?php echo htmlspecialchars($animal['genero']); ?></p>
                                    <p><strong>Pisua:</strong> <?php echo htmlspecialchars($animal['pisua']); ?> kg</p>
                                    <p><strong>Sarrera data:</strong> <?php echo htmlspecialchars($animal['sarrera_data']); ?></p>
                                    <p><strong>Irteera data:</strong> <?php echo htmlspecialchars($animal['irteera_data'] ? $animal['irteera_data'] : '--'); ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="animal-derecha">
                            <div class="animal-info">
                                <p><?php echo htmlspecialchars($animal['deskribapena']); ?></p>
                            </div>
                        </div>
                    </section>
                <?php endforeach; ?>

            </section>
        <?php endforeach; ?>    
    </div>
<?php else: ?>
    <p>Ez daukagu animaliarik Basalian oraindik.</p>
<?php endif; ?>

<!-- Cargamos el footer de forma dinámica -->
<?php include 'php/footer.php'; ?>

</body>




</html>

<!-- script para hacer el movimiento o transicion del nav -->
<script type="text/javascript">
        window.addEventListener("scroll", function () {
        let header = document.querySelector("header");
        header.classList.toggle("abajo", window.scrollY > 0);
    })
</script>

<script src="scripts/menuDesplegable.js"></script>