<?php
session_start();
include 'conexion.php';

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];
    $sql = "SELECT * FROM libros WHERE codigo = :codigo";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':codigo', $codigo);
    $stmt->execute();
    $libro = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$libro) {
        header("Location: consulta_libros.php");
        exit();
    }
} else {
    header("Location: consulta_libros.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Libro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Modificar Libro</h1>
        <div class="form-box">
            <form action="procesar_modificar.php" method="POST">
                <input type="hidden" name="codigo" value="<?php echo $libro['codigo']; ?>">
                
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" value="<?php echo $libro['titulo']; ?>" required>
                
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" value="<?php echo $libro['autor']; ?>" required>
                
                <p>Disponible?</p>
                <label>
                    <input type="radio" name="disponible" value="si" <?php echo $libro['disponible'] ? 'checked' : ''; ?>> Sí
                </label>
                <label>
                    <input type="radio" name="disponible" value="no" <?php echo !$libro['disponible'] ? 'checked' : ''; ?>> No
                </label>
                
                <button type="submit">Guardar Cambios</button>
            </form>
        </div>
    </div>
</body>
</html>
