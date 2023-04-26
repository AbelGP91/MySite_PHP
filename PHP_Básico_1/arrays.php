<?php

// Arrays

$numeros[0] = 1;
$numeros[1] = 2;
$numeros[2] = 3;
$numeros[3] = 4;

$numerosArray = array(1,2,3,4,5,6);

// Array asociativo

$edad = array(
    
    "juan" => 11, "pedro" => 20, "david" => 35

);

echo $edad ['pedro'];
echo "<br>";
echo $edad ['juan'];
echo "<br>";
echo $edad['david'];

echo "<pre>";
var_dump($edad);
echo "</pre>";

// Array operaciones

$numerosOperador = [1,2,3,4,5,6,7,8];

    $suma = array_sum($numerosOperador);
    echo $suma;

    

$numerosArray2 = array (1,2,3,4,5,6);
$numerosArray2 [] = 100;

echo "<pre>";
var_dump($numerosArray2);
echo "</pre>";

$asociativo = array(

    "maria" => 18, "pedro" => 33, "maria" => "33"

// Cuando se introducen datos repetidos, estos se modifican    

);

$asociativo ["jeremias"] = 100;

echo "<pre>";
var_dump($asociativo);
echo "</pre>";

?>