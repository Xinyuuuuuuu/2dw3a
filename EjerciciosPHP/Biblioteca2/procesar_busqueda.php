<?php
// Recoger los datos de búsqueda desde el formulario
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
$autor = isset($_POST['autor']) ? $_POST['autor'] : '';

// Construir la consulta de búsqueda
$sql = "SELECT * FROM libros WHERE 1=1";
$params = [];

if (!empty($titulo)) {
    $sql .= " AND titulo LIKE :titulo";
    $params[':titulo'] = '%' . $titulo . '%';
}

if (!empty($autor)) {
    $sql .= " AND autor LIKE :autor";
    $params[':autor'] = '%' . $autor . '%';
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
