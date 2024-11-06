<?php
session_start();
include 'conexion.php'; // Incluye la conexión a la base de datos

$username = $_POST['username'];
$password = $_POST['password'];

// Aquí se verifica si las credenciales son correctas
if ($username === 'usuario1' && $password === 'contrasena') {
    // Credenciales correctas: establece una sesión para el usuario
    $_SESSION['username'] = $username;
    
    // Redirige a la página de opciones
    header("Location: opciones.php");
    exit();
} else {
    // Credenciales incorrectas: muestra un mensaje de error
    echo "Usuario o contraseña incorrectos. <br>";
    echo "<a href='index.html'>Intentar de nuevo</a>";
}
?>
