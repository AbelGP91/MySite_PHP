
<?php

include "Shape.php";
include "Triangle.php";
include "Rectangle.php";

$triangle = new Triangle (10,2);
$rectangle = new Rectangle (10,2);

echo $triangle->calcularArea();
echo $rectangle->calcularArea();

?>