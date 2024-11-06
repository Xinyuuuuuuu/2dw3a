<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Libro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="contenedor">
        <h1>ALTA DE LIBRO</h1>
        <div class="form-box">
            <form action="procesar_nuevo.php" method="POST">
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" required>
                
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" required>
                
                <p>Disponible?</p>
                <label>
                    <input type="radio" name="disponible" value="si" checked> Sí
                </label>
                <label>
                    <input type="radio" name="disponible" value="no"> No
                </label>
                
                <button type="submit">Guardar</button>
            </form>
        </div>
    </div>
</body>
</html>
