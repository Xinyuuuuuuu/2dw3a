<?php
session_start();
include 'conexion.php'; // Incluye la conexión a la base de datos

// Verificar si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

// Consulta para obtener todos los libros
$sql = "SELECT * FROM libros";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Libros</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>BIBLIOTECA</h1>
        <a href="nuevo.php" class="btn">Alta de libro</a>
        <table>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Disponible?</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libro): ?>
                    <tr>
                        <td><?php echo $libro['codigo']; ?></td>
                        <td><?php echo $libro['titulo']; ?></td>
                        <td><?php echo $libro['autor']; ?></td>
                        <td><?php echo $libro['disponible'] ? 'Sí' : 'No'; ?></td>
                        <td>
                            <a href="modificar_libro.php?codigo=<?php echo $libro['codigo']; ?>" class="btn">Modificar</a>
                            <a href="borrar_libro.php?codigo=<?php echo $libro['codigo']; ?>" class="btn" onclick="return confirm('¿Estás seguro de que deseas borrar este libro?');">Borrar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
