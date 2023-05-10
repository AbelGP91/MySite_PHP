
<?php

class Rectangle implements Shape {

    protected int $ample = 0;
    protected int $alt = 0;

    public function __construct (int $ample, int $alt){

        $this->ample = $ample;
        $this->alt = $alt;        

    }

    public function calcularArea(){

        $area = ($this->ample * $this->alt);
        echo "L'area del rectangle és de " . $area . "<br>";

    }   

}


?>