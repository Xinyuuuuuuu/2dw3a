<?php
require 'conexion.php';

//LO MISMO, SE CARGA LOS DATOS DEL LIBRO QUE SE HA SELECCIONADO (PARA ESO SE UTLIZA LO DEL CODIGO QUE ESTA EN modificar.php)
$codigo = $_GET['codigo'];//se obtiene el codigo del libro

$stmt = $pdo->prepare("SELECT titulo FROM libros WHERE codigo = :codigo");
$stmt->execute(['codigo' => $codigo]);
$libro = $stmt->fetch();
?> 
 <!-- luego aqui ya se crea el formulario que se ejecuta en procesar_borrar.php-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Libro</title>
</head>
<body>
    <h1>Borrar Libro</h1>
    <p>¿Deseas borrar el libro con título "<?= $libro['titulo'] ?>"?</p>
    <form action="procesar_borrar.php" method="POST">
        <input type="hidden" name="codigo" value="<?= $codigo ?>">
        <button type="submit">Sí, borrar</button>
        <a href="consulta.php">No borrar</a>
    </form>
</body>
</html>
