<?php
class Shape{

    public $sides = 0; // Primera propiedad
    public $name = " "; // Segunda propiedad

public function description(){ // Primer método

    echo "Un $this->name con $this->sides lados.";

}

}

$myShape1 = new Shape; // Creamos el objeto
$myShape1 -> sides = 3; // Le damos valor a la propiedad Sides
$myShape1 -> name= "Triangle"; // Le damos valor a la propiedad Nombre
$myShape1->description(); // Llamamos la funcion Description

// Ejercicio de Clases

class Triangle {

    public $lenght = 0;
    public $height = 0;

public function area(){

    return ($this->lenght * $this->height)/2;

} 
    
}

echo "<br>";

function test($lenght, $height){

    $answer = 0;
    $obj = new Triangle;
    $obj -> lenght = $lenght;
    $obj -> height = $height;
    $answer = $obj->area();
    return $answer;

}

// Llamamos la funcion Test

echo test(8,9);

?>
