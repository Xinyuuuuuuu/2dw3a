<?php
require 'conexion.php';

//PHP PARA EDITAR TODO LO QUE SE QUIERA DEL LIBRO

//se pilla todos los datos del fourmalrios de modificar mediante el metodo post 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $disponible = $_POST['disponible'];

//y aqui se hace la consulta para actualizar y ejecutarlo
    $stmt = $pdo->prepare("UPDATE libros SET titulo = :titulo, autor = :autor, disponible = :disponible WHERE codigo = :codigo");
    $stmt->execute(['titulo' => $titulo, 'autor' => $autor, 'disponible' => $disponible, 'codigo' => $codigo]);

    header("Location: consulta.php");
    exit();
}
?>
