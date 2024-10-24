<?php

//Inicia la sesión para almacenar los datos del usuario logueado.
session_start(); 

include "conexionBD.php";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $bdusername, $bdpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo("Error, no se ha podido conectar a la base de datos");
    die("Error al conectar con la base de datos: " . $e->getMessage());
}

//Comprobamos si se ha enviado el formulario.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['pswd'];

    //Buscamos el usuario en la base de datos.
    $stmt = $pdo->prepare('SELECT * FROM erabiltzaile WHERE izena = :izena');
    $stmt->execute(['izena' => $usuario]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //Si el usuario existe y la contraseña coincide.
    if ($user && $password === $user['password']) {
        // Iniciar la sesión
        $_SESSION['izena'] = $user['izena'];
        $_SESSION['administratzaile'] = $user['administratzaile'];
    

        //Redirigir al usuario a la página dónde se encuentra
        header('Location: ../index.php');
        exit;
    } else {
        echo "<script type='text/javascript'>
            window.location.href = '../index.php';
            alert('Usuario o contraseña incorrectos.');
        </script>";
    }
}
?>