<?php
require 'conexion.php';
//INSETAR NUEVO LIBRO

//obtener y verificar los valors enviados del formulario q esta en nuevo.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $disponible = $_POST['disponible'];  // 1 para Sí, 0 para No

    // consulta para insertar el libro
    $stmt = $pdo->prepare("INSERT INTO libros (titulo, autor, disponible) VALUES (:titulo, :autor, :disponible)"); //se hace la sentencia
    $stmt->execute(['titulo' => $titulo, 'autor' => $autor, 'disponible' => $disponible]); //ejecuta la consulta

    // Redirigir a la página de consulta de libros
    header("Location: consulta.php");
    exit();
}
?>
