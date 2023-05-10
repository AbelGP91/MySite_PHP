
<?php

include "Shape.php";
include "Triangle.php";
include "Rectangle.php";

// En la POO_1 lo he hecho con Classes Abstractas
// Para hacerlo diferente, voy a hacerlo con Interfícies

$triangle = new Triangle (2,10);
$rectangle = new Rectangle (2,10);

$triangle->calcularArea();
$rectangle->calcularArea();





?>