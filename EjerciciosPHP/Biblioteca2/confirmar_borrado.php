<?php
session_start();
include 'conexion.php';

// Verificar si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

// Obtener el código del libro desde la URL
if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];
} else {
    header("Location: consulta_libros.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Libro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Borrar Libro</h1>
        <p>¿Deseas borrar el libro con código "<?php echo $codigo; ?>"?</p>
        <div class="btn-group">
            <a href="procesar_borrado.php?codigo=<?php echo $codigo; ?>" class="btn">Sí, borrar</a>
            <a href="consulta_libros.php" class="btn">No, volver</a>
        </div>
    </div>
</body>
</html>
