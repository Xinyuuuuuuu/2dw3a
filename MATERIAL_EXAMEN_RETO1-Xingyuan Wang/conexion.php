<?php
$host = 'localhost'; // o la IP del servidor de bases de datos
$dbname = 'AgenciaViajes';
$username = 'root'; // usuario por defecto en XAMPP
$password = ''; // contraseña por defecto en XAMPP está vacía

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configurar el PDO error mode a exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa"; 
    
} catch (PDOException $e) {
    die("No se pudo conectar a la base de datos $dbname :" . $e->getMessage());
}
?>
