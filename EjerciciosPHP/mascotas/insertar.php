<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'menu.php'?>
    <?php  include 'conexion.php';
            $stmt = $pdo->prepare("SELECT * FROM mascotas");
            $stmt->execute();
            $resultados = $stmt->fetchAll();?>
    <div class="contenido">
    <form action="insertarc.php" method="POST" enctype="multipart/form-data">
    <legend>nombre</legend><br>
    <input type="text" name="nombre"><br>
    <legend>imagen</legend><br>
    <input type="file" name="imagen" id=""><br>
    <select name="raza" id="">
        <?php 
            foreach ($resultados as $fila) {
                echo '<option value="'.$fila['raza_id'].'">'.$fila['raza_id'].'</option>';
            }
            
        ?>
    </select><br>
    <input type="submit" value="Insertar" name="insertar">
</form>
    </div>
   <?php include 'footer.php'?>
</body>
</html>