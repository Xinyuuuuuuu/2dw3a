<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números del 0 al 10 con do-while</title>
</head>
<body>

    <h1>Números del 0 al 10 usando do-while</h1>

    <p>
        <?php
            $i = 0;

            do {
                print $i . "<br>";
                $i++;
            } while ($i <= 10); 
        ?>
    </p>

</body>
</html>
