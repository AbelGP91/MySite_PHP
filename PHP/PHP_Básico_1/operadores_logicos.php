<?php

$a = 5 == 5;
$b = 5 === 5.0;
$c = 5 != 7; // También podemos usar el operador " <> " para marcar diferencias
$d = 5 <=> 5; // Devuelve 0 si son iguales / Return 1 si izq es mayor / -1 si menor


var_dump($a);
echo "<br>";

var_dump($b);
echo "<br>";

var_dump($c);
echo "<br>";

var_dump($d);
echo "<br>";

// NOT --> Cuando la condicion es FALSA, return un TRUE

$e = !(5>10);
var_dump($e);
echo "<br>";

// AND --> Cuando se cumplen ambas condiciones

$f = (5>3) && (4<10);
var_dump($f);
echo "<br>";

// OR --> Almenos ALGUNA de las comparaciones es TRUE

$g = (5>3) || (3>5); // Se cumple almenos 1 de las condiciones
var_dump($g);
echo "<br>";



?>