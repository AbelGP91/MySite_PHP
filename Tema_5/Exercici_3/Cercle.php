
<?php

class Cercle implements Shape {
    
    protected int $radi = 0;
    

    public function __construct (int $radi){

        $this->radi = $radi;
              

    }

    public function calcularArea(){

        $area = pi() * pow(($this->radi),2);
        echo "L'area del cercle és de: " . $area . "<br>";

    }

}


?>