<?php
require 'conexion.php';

//ESTE PHP ES PARA CREAR EL FORMULARIO Y ENVIAR LOS DATOS QUE LUEGO SE PROCESAN EL precesar_modificar.php

//SE NECESITA PONER ESTO PORQ NECESITRAMOS CARGAR LA INFORMACION ALCTUAL DEL LIBRO QUE SE VA A VER AL CARGAR EN LOS CAMPOS DEL FORMUALRIO DE MODIFICAR
$codigo = $_GET['codigo']; //se obtiene el codigo del libro
$stmt = $pdo->prepare("SELECT * FROM libros WHERE codigo = :codigo");
$stmt->execute(['codigo' => $codigo]);
$libro = $stmt->fetch();

// Verifica si se encontró el libro
if (!$libro) {
    echo "Error: No se encontró un libro con el código especificado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Libro</title>
</head>
<body>
    <h1>Modificar Libro</h1>
    <form action="procesar_modificar.php" method="POST">
        <input type="hidden" name="codigo" value="<?= htmlspecialchars($libro['codigo']) ?>"><!-- aqui se carga el codigo pero no se vera porq el type es hidden, es solo para guardar el codigo-->
        
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" value="<?= htmlspecialchars($libro['titulo']) ?>" required><br> <!-- aqui se muestra el titulo que tiene el libro actualmente, y se guardara lo nuevo que se escriba-->
        
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" value="<?= htmlspecialchars($libro['autor']) ?>" required><br><!-- aqui se muestra el autor que tiene el libro actualmente y se guardara lo nuevo que se escriba-->
        
        <label>Disponible:</label><!-- carga el actual que este seleccionado y luego enviara lo nuevo que se seleccione a procesar_modificar.php como las otras dos de arriba-->
        <input type="radio" id="disponible_si" name="disponible" value="1" <?= $libro['disponible'] ? 'checked' : '' ?>>
        <label for="disponible_si">Sí</label>
        
        <input type="radio" id="disponible_no" name="disponible" value="0" <?= !$libro['disponible'] ? 'checked' : '' ?>>
        <label for="disponible_no">No</label><br>
        
        <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
