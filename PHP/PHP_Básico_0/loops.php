<?php
$x = 4;
$y = 0;

while ($y <= 10){

    $y += $x;
    $x += 1;

}

echo "El valor de X és: $x <br>";
echo "El valor de Y és: $y <br>";

// Ejercicio de prueba

$input = 2;
$contador = 0;

while ($input < 100)
{

    $input = $input * $input;
    $contador = $contador + 1;

}

echo "El número de Loops del bucle ha sido de: $contador";



?>