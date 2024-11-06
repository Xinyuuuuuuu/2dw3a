<?php 
 if ( isset($_FILES['imagen']) && isset($_POST['nombre'])) {
    // Directorio donde se guardarán las imágenes
    $directorio = './Imagenes/';

    $nombre_archivo = $_FILES['imagen']['name'];
    $ruta_temporal = $_FILES['imagen']['tmp_name'];
    $error = $_FILES['imagen']['error'];
    $tipo_imagen = $_FILES['imagen']['type'];
   
    
    if ($error !== UPLOAD_ERR_OK) {
        echo "Hubo un error al subir la imagen.";
        exit;
    }

    $ruta_destino = $directorio . $nombre_archivo;

    // Mover el archivo subido al directorio de imágenes
    if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
        echo "La imagen se ha subido correctamente a: " . $ruta_destino;
  
    } else {
        echo "Error al mover la imagen al directorio.";
    }

    include 'conexion.php';
    $nombre=$_POST['nombre'];
    $raza=$_POST['raza'];

    $stmt = $pdo->prepare("INSERT INTO mascotas (nombre,imagen,raza_id) VALUES (:nombre,:imagen,:raza)");
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':imagen', $nombre_archivo);
    $stmt->bindParam(':raza', $raza);
    $stmt->execute();
    echo '<script>alert("se ha insertado correctamente los datos")</script>';
    echo '<script>window.location.href="./biblioteca.php"</script>';
}

?>