<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

// Inicializamos la variable de resultados para evitar errores si aún no se ha realizado ninguna búsqueda
$libros = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'procesar_busqueda.php';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador de Libros</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>Buscador de Libros</h1>
        <form action="buscador.php" method="POST">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo">
            
            <label for="autor">Autor</label>
            <input type="text" id="autor" name="autor">
            
            <button type="submit">Buscar</button>
        </form>

        <?php if (!empty($libros)): ?>
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Disponible?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($libros as $libro): ?>
                        <tr>
                            <td><?php echo $libro['codigo']; ?></td>
                            <td><?php echo $libro['titulo']; ?></td>
                            <td><?php echo $libro['autor']; ?></td>
                            <td><?php echo $libro['disponible'] ? 'Sí' : 'No'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php elseif ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <p>No se encontraron libros que coincidan con los criterios de búsqueda.</p>
        <?php endif; ?>
    </div>
</body>
</html>
