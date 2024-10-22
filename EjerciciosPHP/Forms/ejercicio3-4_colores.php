<?php
if (isset($_POST['color'])) {
    
    $color = htmlspecialchars($_POST['color']); 
} else {
    $color = '#FFFFFF'; 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color seleccionado</title>
    <style>
        body {
            background-color: <?php echo $color; ?>;
        }
    </style>
</head>
<body>
    <h2>Has seleccionado el color: <?php echo $color; ?></h2>
    <a href="ejercicio3-4.php">Volver a seleccionar otro color</a>
</body>
</html>
