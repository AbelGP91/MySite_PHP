
<?php

class Triangle implements Shape {
    
    protected int $ample = 0;
    protected int $alt = 0;

    public function __construct (int $ample, int $alt){

        $this->ample = $ample;
        $this->alt = $alt;        

    }

    public function calcularArea(){

        $area = ($this->ample * $this->alt)/2;
        echo "L'area del triangle és de " . $area . "<br>";

    }

}


?>