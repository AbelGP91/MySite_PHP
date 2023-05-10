
<?php

include "Animal.php";
include "Gato.php";
include "Perro.php";

$nuevoGato = new Gato ("Garfield");
$nuevoPerro = new Perro ("Toyko");

$nuevoGato->makeSound();
$nuevoPerro->makeSound();


?>