<?php 
include 'conexion.php';
include 'menu.php';


$query = "SELECT * from trips order by id desc limit 5" ;
$stmt = $pdo->prepare($query);
$trips = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Txurdi - Agencia de viajes</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Txurdi - Agencia de viajes</h1>
    <div class="trips">
    <?php foreach($trips as $trip):?>
        <div class="trip">
            <h2><?php echo $trip['titulo'];?></h2>
            <p>Destino: <?php echo $trip['destino'];?></p>
            <p>Precio: <?php echo $trip['precio'];?> €</p>
            <img src="images/<?php echo file_exists("images/{$trip['imagen']}") ? $trip['imagen'] :'default.jpg';?>"  alt="Imagen del viaje">
        </div>
        <?php endforeach ?>
    </div>
</body>
</html>