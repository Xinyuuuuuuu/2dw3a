<?php
require 'conexion.php';

//PHP CON LA CONSULTA DE BORRAR 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo']; //pilla el codigo a borrar desde el formulario enviado
    $stmt = $pdo->prepare("DELETE FROM libros WHERE codigo = :codigo"); //se hace la consulta
    $stmt->execute(['codigo' => $codigo]); //se ejecuta 

    header("Location: consulta.php");
    exit();
}
?>
