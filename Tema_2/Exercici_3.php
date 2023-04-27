
<?php

// Especialització PHP - Tema 2 - Exercici_3

echo "<pre>";

$x = 3;
$y = 5;

$n = 3.5;
$m = 7.2;

var_dump($x);
var_dump($y);
var_dump($n);
var_dump($m);

echo "<br>";

echo "El valor X és $x i el valor Y és $y <br><br>";
echo "$x + $y = " . ($x+$y) . "<br>";
echo "$x - $y = " . ($x-$y) . "<br>";
echo "$x x $y = " . ($x*$y) . "<br>";
echo "$x % $y = " . ($x%$y) . "<br><br>";

echo "El valor de N és $n i el valor de M és $m <br><br>";
echo "$n + $m= " . ($n+$m) . "<br>";
echo "$n - $m = " . ($n-$m) . "<br>";
echo "$n x $m = " . ($n*$m) . "<br>";
echo "$n % $m = " . ($n%$m) . "<br><br>";

echo "El doble de $x és: " . ($x*2 . "<br>");
echo "El doble de $y és: " . ($y*2 . "<br>");
echo "El doble de $n és: " . ($n*2 . "<br>");
echo "El doble de $m és: " . ($m*2 . "<br><br>");

echo "La suma de totes les variables és " . ($x+$y+$n+$m) . "<br>"; 
echo "El producte de totes les variables és " . ($x*$y*$n*$m) . "<br>"; 




// Calculadora

$num1 = 2;
$num2 = 5;
$operador = "+";

echo "<br>";

calculadora($num1,$num2,$operador);

function calculadora ($num1,$num2,$operador){

    switch ($operador) {
        case '+':

            echo "La suma de $num1 y $num2 és: " . ($num1 + $num2);
            break;
        
        case '-':

            echo "La resta de $num1 y $num2 és: " . ($num1 - $num2);
            break;
        
        case '*':

            echo "La multiplicació de $num1 y $num2 és: " . ($num1 * $num2);
            break;    
            
        case '/':

            echo "La divisió de $num1 y $num2 és: " . ($num1 / $num2);
            break;    

        default:
            
            echo "Introdueix un operador vàlid";
            break;
    }

}


echo "</pre>";

?>
