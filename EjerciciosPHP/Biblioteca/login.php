<?php

require 'conexion.php';

    // Procesar el formulario si se ha enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener las credenciales ingresadas por el usuario
        $input_username = $_POST['username'];
        $input_password = $_POST['password'];

        // Preparar la consulta para buscar al usuario
        $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE nombre_usuario = :username');
        $stmt->execute(['username' => $input_username]);
        $user = $stmt->fetch();

        // Validar las credenciales
        if ($user && $user['contrasena'] === $input_password) {
            // Guardar el nombre de usuario en la sesión
            session_start(); // iniciar la sesión antes de usar $_SESSION
            $_SESSION['username'] = $user['nombre_usuario'];
            // Redirigir a otra página
            header('Location: biblioteca.php'); // Cambia a la página de bienvenida
            exit();
        } else {
            header('Location: index.html'); // Cambia a la página de bienvenida
            exit();
        }
    }


?>
