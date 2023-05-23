<?php

$a = 50; // Modificar el valor de A para que sea inferior a B y se cumpla la condición
$b = 15;

if ($a > $b) // This code is executed only if $a is greater than $b

{   

    echo "A is greater than B";

}

else // This code is executed if the preceding "if" condition evaluated to false

{
    
    echo "A is less than B";
}

echo "<br>";



$num = 36;
$temp = -1; // Asignamos el valor 0 si el número es par
            // Asignamos el valor 1 si el número es impar

if ($num % 2 ==0){
    
    echo "$num es un número Par ";
    $temp = 0;
    echo "<br>";
}

else {

    echo "$num es un número Impar ";
    $temp = 1;
    echo "<br>";
}



?>