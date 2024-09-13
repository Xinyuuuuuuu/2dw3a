<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Anidada</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 2px solid black;
            padding: 10px;
            text-align: center;
            width: 50px;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Bucle para generar las filas
                for ($i = 1; $i <= 3; $i++) {
                    print "<tr>";
                    print "<th>$i</th>";
                    
                    for ($j = 1; $j <= 4; $j++) {
                        print "<td>$i-$j</td>";
                    }
                    print "</tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>
