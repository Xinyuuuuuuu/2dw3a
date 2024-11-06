<?php
include 'conexion.php';
include 'menu.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $destino = $_POST['destino'];
    $precio = $_POST['precio'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];
    $categoria_id = $_POST['categoria'];

    $nombreImagen = $_FILES['iamgen']['name'];
    $rutaImagen = "Images/" . basename($nombreImagen);

    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen)) {
        $sql = "INSERT  into trips (titulo, destino, precio, fecha, descripcion, categoria_id, imagen)
        VALUES (:titulo, :destino, :precio, :fecha, :descripcion, :categoria_id, :imagen)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":titulo" => $titulo,
            ":destino" => $destino,
            ":precio" => $precio,
            ":fecha" => $fecha,
            ":descripcion" => $descripcion,
            ":categoria_id" => $categoria_id,
            ":imagen" => $nombreImagen
        ]);

        header("Location: index.php");
        exit();
    } else {
        echo "Error al subir la imagen";
    }
}
?>