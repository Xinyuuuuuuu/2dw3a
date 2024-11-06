<?php
require 'conexion.php'; //se conecta a la base de datos porq sino no puede cargar la tabla de consulta de libros

//ESTa es para hacer la tabla, donde sale toda la informacion de los libros y se puede modificar y borrar

$stmt = $pdo->query("SELECT * FROM libros"); //consulta a la base de datos para obtener todos los registros de la tabla libros
$libros = $stmt->fetchAll();  //almaceno toda la informacion de los libros en la variable libros
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Libros</title>
</head>
<body>
    <h1>Consulta de Libros</h1>
    <table border="1">
        <tr>
            <th>Codigo</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Disponible</th>
        </tr>
        <?php foreach ($libros as $libro): ?> <!-- bucle de libros que se mete cada valor en la nueva variable libro-->
        <tr>
            <td><?= $libro['codigo'] ?></td>
            <td><?= $libro['titulo'] ?></td>
            <td><?= $libro['autor'] ?></td>
            <td><?= $libro['disponible'] ?></td>
            <td>
                <a href="modificar.php?codigo=<?= $libro['codigo'] ?>">Modificar</a> <!-- aqui se utiliza ?codigo="<= $libro['codigo'] >"porq quiero recibir el valor ese para identificar el libro sobre el que quiero editar-->
                <!-- Por ejemplo, si codigo es 101, el enlace generado sería algo como modificar.php?codigo=101.-->
                <a href="borrar.php?codigo=<?= $libro['codigo'] ?>">Borrar</a> <!-- aqui es exactamente lo mismo-->
                <!--La razón para pasar el codigo en la URL es que el archivo modificar.php o borrar.php necesita saber qué libro debe modificar o borrar. Sin este parámetro en la URL, esos archivos no tendrían forma de saber qué libro fue seleccionado.-->
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
