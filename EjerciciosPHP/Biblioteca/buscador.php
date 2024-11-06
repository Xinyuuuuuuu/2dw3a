<?php
require 'conexion.php';

$titulo = $_GET['titulo'] ?? '';
$autor = $_GET['autor'] ?? '';

$query = "SELECT * FROM libros WHERE titulo LIKE :titulo AND autor LIKE :autor";
$stmt = $pdo->prepare($query);
$stmt->execute([
    'titulo' => "%$titulo%",
    'autor' => "%$autor%"
]);
$libros = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador de Libros</title>
</head>
<body>
    <h1>Buscar Libros</h1>
    <form method="GET" action="buscador.php">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="<?= $titulo ?>"><br>
        
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" value="<?= $autor ?>"><br>
        
        <button type="submit">Buscar</button>
    </form>

    <table border="1">
        <tr>
            <th>codigo</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Disponible</th>
        </tr>
        <?php foreach ($libros as $libro): ?>
        <tr>
            <td><?= $libro['codigo'] ?></td>
            <td><?= $libro['titulo'] ?></td>
            <td><?= $libro['autor'] ?></td>
            <td><?= $libro['disponible'] ?></td>

        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
