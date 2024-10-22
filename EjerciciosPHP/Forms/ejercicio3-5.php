<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los datos del formulario
    $nombre = htmlspecialchars($_POST['fname']);
    $apellido = htmlspecialchars($_POST['lname']);
    $edad = isset($_POST['age']) ? (int)$_POST['age'] : null;
    $vehiculo = isset($_POST['vehicle']) ? $_POST['vehicle'] : null;
    $fecha_alta = htmlspecialchars($_POST['alta_data']);

    // Validamos que el nombre y apellidos no estén vacíos
    if (empty($nombre) || empty($apellido)) {
        echo "<p style='color:red;'>El nombre y apellido son obligatorios</p>";
    } else {
        // Comprobamos la edad y generamos el mensaje
        if ($edad >= 0 && $edad <= 15) {
            echo "<p>$nombre $apellido, eres muy joven, es mejor que vayas a clase andando.</p>";
        } elseif ($edad > 15 && $edad <= 60) {
            if ($vehiculo == "Car") {
                echo "<p>$nombre $apellido, intente utilizar lo menos posible el coche, por favor.</p>";
            } elseif ($vehiculo == "Bike") {
                echo "<p>Bien hecho, $nombre $apellido. Vienes en bici.</p>";
            } elseif ($vehiculo == "Bus") {
                echo "<p>Gracias por utilizar el bus, $nombre $apellido.</p>";
            }
            // Mostramos la fecha de alta si está en el rango 15-60
            if (!empty($fecha_alta)) {
                echo "<p>Fecha de alta: $fecha_alta</p>";
            }
        } elseif ($edad > 60 && $edad <= 100) {
            echo "<p>$nombre $apellido, ¿estás seguro que no prefieres viajar en avión?</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<h1>DATOS DEL ALUMNO</h1>
<form method="post" action="">
  <label for="fname">Nombre:</label>
  <input type="text" id="fname" name="fname"><br><br>
  
  <label for="lname">Apellido:</label>
  <input type="text" id="lname" name="lname"><br><br>
  
  <p>Edad</p>
  <input type="radio" id="age1" name="age" value="15">
  <label for="age1">0 - 15</label><br>
  
  <input type="radio" id="age2" name="age" value="60">
  <label for="age2">15 - 60</label><br>  
  
  <input type="radio" id="age3" name="age" value="100">
  <label for="age3">60 - 100</label><br><br>
  
  <p>Cómo vienes al centro de estudios?</p>
  <input type="radio" id="vehicle1" name="vehicle" value="Bike">
  <label for="vehicle1"> Bicicleta</label><br>
  
  <input type="radio" id="vehicle2" name="vehicle" value="Car">
  <label for="vehicle2"> Coche</label><br>
  
  <input type="radio" id="vehicle3" name="vehicle" value="Bus">
  <label for="vehicle3"> Autobús</label><br><br>
  
  <label for="alta_data">Fecha de alta:</label>
  <input type="date" id="alta_data" name="alta_data"><br><br>
  
  <input type="submit" value="Enviar">
</form>

</body>
</html>
