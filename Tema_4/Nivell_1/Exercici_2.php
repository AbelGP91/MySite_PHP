
<?php

class Shape {

    public int $ample = 0;
    public int $alt = 0;
   
    public function __construct (int $ample, int $alt){

        $this->ample = $ample;
        $this->alt = $alt; 
      
    }
    
    
}

class Triangle extends Shape {

    public function areaTriangle (){

        $areaTriangle = ($this->ample*$this->alt)/2;
        echo "L'area del Triangle és de " . $areaTriangle . "<br>";

    }

}

class Rectangle extends Shape {

    public function areaRectangle (){

        $areaRectangle = ($this->ample*$this->alt);
        echo "L'area del Rectangle és de " . $areaRectangle . "<br>";

    }
   
}

$triangle = new Triangle (10,2);
$rectangle = new Rectangle (10,2);


echo $triangle->areaTriangle();
echo $rectangle->areaRectangle();

?>