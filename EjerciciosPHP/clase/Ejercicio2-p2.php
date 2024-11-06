<?php
        // Inicializamos la variable a
        $a = 2;

        // Pre-incremento: ++$a
        $b = ++$a; // Incrementa a antes de asignar el valor a b
        echo "Después de b = ++a:<br>";
        echo "El valor de a es $a y el de b es $b <br><br>";

        // Reseteamos la variable a
        $a = 2;

        // Post-incremento: $a++
        $b = $a++; // Asigna a b primero y luego incrementa a
        echo "Después de b = a++:<br>";
        echo "El valor de a es $a y el de b es $b <br>";
    ?>