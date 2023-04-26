<?php

$animales = array("Perro", "Gato", "Tigre", "Leon");

foreach ($animales as $array_nuevo) {

    echo $array_nuevo. "<br>";

}

echo "<br>";

$alumnos = array ("Juan" => 12, "Abel" => 31, "Beatriz" => 28, "Isabel" => 66);

foreach ($alumnos as $array_actual => $edad) {

    echo $array_actual." tiene ".$edad." años "."<br>";
    
}

?>