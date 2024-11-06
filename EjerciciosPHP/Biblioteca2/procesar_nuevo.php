<?php
session_start();
include 'conexion.php'; // Incluye la conexión a la base de datos

// Verificar si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

// Procesar el formulario al enviar
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $disponible = isset($_POST['disponible']) && $_POST['disponible'] == 'si' ? 1 : 0;

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO libros (titulo, autor, disponible) VALUES (:titulo, :autor, :disponible)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':disponible', $disponible);

    if ($stmt->execute()) {
        echo "<p>Libro añadido correctamente.</p>";
        header("refresh:3; url=nuevo.php");

    } else {
        echo "<p>Error al añadir el libro.</p>";
        header("refresh:3; url=nuevo.php");
    }
}
?>
