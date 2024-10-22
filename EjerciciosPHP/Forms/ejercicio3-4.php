<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona un color</title>
</head>
<body>
    <h2>Selecciona un color:</h2>
    <form action="ejercicio3-4_colores.php" method="post">
        <label>
            <input type="radio" name="color" value="#FF5733" required> Rojo (#FF5733)
        </label><br>
        <label>
            <input type="radio" name="color" value="#33FF57"> Verde (#33FF57)
        </label><br>
        <label>
            <input type="radio" name="color" value="#3357FF"> Azul (#3357FF)
        </label><br>
        <label>
            <input type="radio" name="color" value="#FFFF33"> Amarillo (#FFFF33)
        </label><br>
        <label>
            <input type="radio" name="color" value="#FF33FF"> Magenta (#FF33FF)
        </label><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
