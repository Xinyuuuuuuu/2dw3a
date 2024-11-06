<?php
session_start();
$isAdmin = isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
?>

<nav>
    <ul>
        <li><a href="index.hph">Inicio</a></li>
        <li><a href="listado-viajes.php">Nuestros viajes</a></li>
        <?php if ($isAdmin && !isset($_SESSION['username'])): ?>
            <li><a href="iniciarsesion.php">Iniciar sesión</a></li>
        <?php endif; ?>
        <?php if ($isAdmin): ?>
            <li><a href="crear_viajes.php">Añadir viajes</a></li>
            <li><a href="cerrarsesion.php"></a>Cerrar sesión</li>
        <?php elseif (isset($_SESSION['username'])): ?>
            <li><a href="cerrarsesion.php"></a>Cerrar sesión</li>
        <?php endif ?>

    </ul>
</nav>