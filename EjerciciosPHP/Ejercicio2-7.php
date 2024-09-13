<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha Actual en Castellano</title>
</head>
<body>
    <?php
        // Configuramos la zona horaria a Europa/Madrid
        date_default_timezone_set('Europe/Madrid');

        // Obtenemos el número del día de la semana y del mes
        $numeroDiaSemana = date('N'); // 1 (lunes) a 7 (domingo)
        $numeroMes = date('n'); // 1 (enero) a 12 (diciembre)
        $dia = date('d'); // Día del mes
        $anio = date('Y'); // Año actual

        // Usamos switch para obtener el nombre del día de la semana
        switch ($numeroDiaSemana) {
            case 1: $diaSemana = "Lunes"; break;
            case 2: $diaSemana = "Martes"; break;
            case 3: $diaSemana = "Miércoles"; break;
            case 4: $diaSemana = "Jueves"; break;
            case 5: $diaSemana = "Viernes"; break;
            case 6: $diaSemana = "Sábado"; break;
            case 7: $diaSemana = "Domingo"; break;
        }

        // Usamos switch para obtener el nombre del mes
        switch ($numeroMes) {
            case 1: $mes = "Enero"; break;
            case 2: $mes = "Febrero"; break;
            case 3: $mes = "Marzo"; break;
            case 4: $mes = "Abril"; break;
            case 5: $mes = "Mayo"; break;
            case 6: $mes = "Junio"; break;
            case 7: $mes = "Julio"; break;
            case 8: $mes = "Agosto"; break;
            case 9: $mes = "Septiembre"; break;
            case 10: $mes = "Octubre"; break;
            case 11: $mes = "Noviembre"; break;
            case 12: $mes = "Diciembre"; break;
        }

        // Mostrar la fecha en formato: "Miércoles, 12 de Julio de 2023"
        print "$diaSemana, $dia de $mes de $anio";

    ?>
</body>
</html>
