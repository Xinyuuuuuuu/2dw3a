<?php

include "conexionBD.php";

$conn = new mysqli($servername, $bdusername, $bdpassword, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT izena, espeziea, genero, pisua, deskribapena, sarrera_data, irteera_data, img
        FROM animalia";

$result = $conn->query($sql);

$animales = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $animales[$row['espeziea']][] = $row;
    }
}

// Cerrar conexión
$conn->close();
?>