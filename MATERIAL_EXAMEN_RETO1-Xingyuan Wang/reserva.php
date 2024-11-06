<?php
include 'conexion.php';
include 'menu.php';

if (isset($_GET['id'])) {
    header('Location: listado_viajes.php');
    exit();
}

$id = $_GET['id'];
$query = "SELECT t.*, c.nombre as categoria from trips join in categories c on t.categoria_id = c.id where t.id = :id";
$stmt = $pdo->prepare($query);
$stmt->execute([":id" => $id]);
$viaje = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$viaje) {
    header("Location: listado_viajes.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="contenedor">
        <h1>Reserva de viaje</h1>
        <h2><?php echo $viaje ['titulo']?></h2>
        <p><strong>Destino:</strong><?php echo $viaje['destino']?></p>
        <p><strong>Fecha:</strong><?php echo $viaje['fecha']?></p>
        <p><strong>Precio:</strong><?php echo $viaje['precio']?></p>
        <p><strong>Categoria :</strong><?php echo $viaje['categoria']?></p>
        <p><strong>Descripcion:</strong><?php echo $viaje['descripcion']?></p>
        <img src="images/<?php echo file_exists("images/{$viaje['imagen']}") ? $viaje['imagen'] : 'default.jpg'; ?>"
        alt="Imagen del viaje">
    </div>

    <form action="confitmar_reserva.php" method="post">
        <input type="hidden" name="id" value="<?php  echo $viaje['id']?>">
        <button type="submit">Confirmar reserva</button>
    </form>
</body>

</html>