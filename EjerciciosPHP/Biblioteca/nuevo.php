<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Nuevo Libro</title>
</head>
<body>
     <!-- FORMUALRIO PARA INSERTAR EL NUEVO LIBRO-->
      
    <h1>Insertar Nuevo Libro</h1>
    <form action="insertar.php" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>
        
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br>
        
        <label>Disponible:</label>
        <input type="radio" id="disponible_si" name="disponible" value="1" required>
        <label for="disponible_si">Sí</label>
        <input type="radio" id="disponible_no" name="disponible" value="0">
        <label for="disponible_no">No</label><br>
        
        <button type="submit">Insertar Libro</button>
    </form>
</body>
</html>
