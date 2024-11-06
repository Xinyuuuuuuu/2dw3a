<?php
session_start();
include 'conexion.php';

// Verificar si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

// Verificar si se ha proporcionado el código del libro
if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];

    // Eliminar el libro de la base de datos
    $sql = "DELETE FROM libros WHERE codigo = :codigo";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':codigo', $codigo);

    if ($stmt->execute()) {
        header("Location: consulta_libros.php");
        exit();
    } else {
        echo "Error al borrar el libro.";
    }
} else {
    header("Location: consulta_libros.php");
    exit();
}
?>
