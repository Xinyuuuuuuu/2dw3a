<?php
include 'conexion.php';
include 'menu.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

$query = "SELECT * from categories";
$stmt = $pdo->query($query);
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir viaje</title>
    <link rel="stylesheet" href="estilos.ss">
</head>

<body>
    <div class="contenedor">
        <h1>Añadir viajes</h1>
        <form action="procesar_crear_viaje.php" method="POST" enctype="multipart/form-data">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" required>

            <label for="destino">Destino</label>
            <input type="text" name="destino" required>

            <label for="precio">Precio</label>
            <input type="text" name="precio" required>

            <label for="fecha">Fecha</label>
            <input type="text" name="fecha" required>

            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" required></textarea>

            <label for="categoria">Categoría</label>
            <select name="categoria" required>
                <?php foreach ($categories as $categoria): ?>
                    <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nombre']; ?></option>
                <?php endforeach; ?>
            </select>

            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" accept="image/*" required>
            <button type="submit">Añadir viaje</button>

        </form>
    </div>
</body>

</html>