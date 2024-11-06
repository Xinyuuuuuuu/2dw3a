<?php
$host = 'localhost';         // O 'localhost' si es en tu máquina local
$db = 'db_biblioteca';       // Nombre de tu base de datos
$username = 'root';          // Usuario de MySQL
$password = '';   
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Para manejar errores
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$dsn = "mysql:host=$host;port=3306;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo 'Error en la conexión: ' . $e->getMessage();
    exit();
}
?>