
<?php

// Arrays

$color = array ("rojo", "verde", "amarilo", "azul");

array_splice($color,2); // Elimina los datos del Array a PARTIR de la posición 2

echo "<pre>";
var_dump($color);
echo "</pre>";

$numeros = array (2,13,1,4,8,6);
$numeros2 = array (7,8,6,10,16);
$numeros3 = array (12,3,14,15,11);

// Funciones de Arrays

echo count($numeros); // Contador
echo "<br>";

echo array_search(5,$numeros); // Buscar elementos - Muestra el primer dato encontrado
echo "<br>";

$final = array_merge($numeros, $numeros2, $numeros3); // Mezclamos los Arrays

asort($final); // Ordenamos los valores - La función "arsort" nos permite orden inverso

echo "<pre>";
var_dump($final);
echo "</pre>";

?>