<?php
session_start();
if (!isset($_SESSION['username'])) {
    // Si el usuario no está logueado, redirige a index.html
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca - Opciones</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>***** BIBLIOTECA *****</h1>
        <div class="options-box">
            <a href="nuevo.php" class="option-button">Insertar nuevo libro</a>
            <a href="consulta_libros.php" class="option-button">Consulta de libros</a>
            <a href="buscador.php" class="option-button">Buscador</a>
        </div>
    </div>
</body>
</html>
