<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'menu.php';?>

    <div class="contenido">
    <?php 
        include 'conexion.php';
        $stmt = $pdo->prepare("SELECT * FROM mascotas");
        $stmt->execute();
        $resultados = $stmt->fetchAll();

        echo '<table>
                <tr><th>id</th><th>nombre</th><th>imagen</th><th>adoptado</th><th>raza_id</th></tr>
            ';
            foreach ($resultados as $fila) {
                echo '<tr><td>'.$fila['id'].'</td><td>'.$fila['nombre'].'</td><td><img src="./Imagenes/'.$fila['imagen'].'" width="80px" height="80px"></td><td>'.$fila['adoptado'].'</td><td>'.$fila['raza_id'].'</td></tr>';
            }
        
        
        echo    '</table>';
    
    ?>

    </div>
    <?php include 'footer.php' ?>
</body>
</html>