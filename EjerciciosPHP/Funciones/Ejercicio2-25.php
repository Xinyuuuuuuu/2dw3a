<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de la Media Aritmética</title>
</head>
<body>
    <h1>Calculadora de Media Aritmética</h1>

    <?php
$registroAlumnos = [];

function CrearAlumno(&$registro, $nombre, $edad, $calificacion) {
    // Verificamos si el alumno ya existe en el registro
    if (!isset($registro[$nombre])) {
        // Insertamos al alumno en el array asociativo
        $registro[$nombre] = [
            'edad' => $edad,
            'calificacion' => $calificacion
        ];
        echo "<p>Alumno '$nombre' añadido con éxito.</p>";
    } else {
        echo "<p>El alumno '$nombre' ya existe en el registro.</p>";
    }
}

function MostrarAlumno($registro, $nombre) {
    // Verificamos si el alumno existe en el registro
    if (isset($registro[$nombre])) {
        $alumno = $registro[$nombre];
        echo "<p>Nombre: $nombre, Edad: {$alumno['edad']}, Calificación: {$alumno['calificacion']}</p>";
    } else {
        echo "<p>El alumno '$nombre' no existe en el registro.</p>";
    }
}

CrearAlumno($registroAlumnos, "Carlos", 18, 85);
CrearAlumno($registroAlumnos, "Lucía", 20, 92);
CrearAlumno($registroAlumnos, "Pedro", 17, 78);

MostrarAlumno($registroAlumnos, "Carlos");
MostrarAlumno($registroAlumnos, "Lucía");
MostrarAlumno($registroAlumnos, "Pedro");

MostrarAlumno($registroAlumnos, "Ana");
?>

</body>
</html>