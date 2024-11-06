<?php
include 'conexion.php';
include 'menu.php';

$query = "SELECT c.nombre ads categorita, t.* from trips t join categories c on t.categoria_id = c.id order by c.nombre";
$stmt = $pdo->query($query);
$trips = $stmt->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros viajes</title>
</head>

<body>
    <?php foreach ($trips as $categoria => $viajes): ?>
        <h2><?php echo $categoria; ?></h2>
        <table border="1">
            <?php foreach (array_chunk($viajes, 2) as $fila): ?>
                <tr>
                    <?php foreach ($fila as $trip): ?>
                        <td>
                            <h3><?php echo $trip['titulo']; ?></h3>
                            <p>Destino: <?php echo $trip['destino']; ?></p>
                            <p>Fecha: <?php echo $trip['fecha']; ?> </p>
                            <p>Precio: <?php echo $trip['precio']; ?> €</p>
                            <img src="images/<?php echo file_exists("images/{$trip['imagen']}") ? $trip['imagen'] : 'default.jpg'; ?>"
                                alt="Imagen del viaje">
                            <?php if (isset($_SESSION['role1']) && $_SESSION['role1'] === 'admin'): ?>
                                <button>Reserva</button>
                            <?php endif; ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endforeach; ?>
</body>

</html>