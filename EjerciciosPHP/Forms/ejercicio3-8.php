<?php
// Carpeta donde se guardarán las imágenes subidas
$target_dir = "img/";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $edad = (int)$_POST['edad'];
    $imagen = $_FILES['imagen']['name'];

    // Ruta completa donde se guardará la imagen
    $target_file = $target_dir . basename($imagen);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verifica si el archivo es una imagen
    $check = getimagesize($_FILES['imagen']['tmp_name']);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }

    // Verifica si ya existe el archivo
    if (file_exists($target_file)) {
        echo "Lo siento, el archivo ya existe.";
        $uploadOk = 0;
    }

    // Verifica el tamaño del archivo (ejemplo: 500KB máximo)
    if ($_FILES['imagen']['size'] > 500000) {
        echo "Lo siento, tu archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Permite solo ciertos formatos de imagen (JPG, JPEG, PNG, GIF)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
        echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    }

    // Si $uploadOk es 0, significa que hubo algún error
    if ($uploadOk == 0) {
        echo "Lo siento, tu archivo no fue subido.";
    } else {
        // Intenta subir el archivo
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target_file)) {
            echo "El archivo ". htmlspecialchars(basename($imagen)). " ha sido subido.";
        } else {
            echo "Lo siento, hubo un error al subir tu archivo.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos</title>
</head>
<body>
    <h1>Registro de Alumnos</h1>
    
    <!-- Formulario para recoger los datos -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <label for="imagen">Subir imagen:</label>
        <input type="file" id="imagen" name="imagen" accept="image/*" required><br><br>

        <input type="submit" value="Registrar">
    </form>

    <?php
    // Muestra los datos si se ha enviado el formulario y se ha subido la imagen correctamente
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $uploadOk == 1) {
        echo "<h2>Datos del alumno:</h2>";
        echo "Nombre: $nombre<br>";
        echo "Apellido: $apellido<br>";
        echo "Edad: $edad<br>";
        echo "<img src='$target_file' alt='Imagen del alumno' width='200'><br>";
    }
    ?>
</body>
</html>
