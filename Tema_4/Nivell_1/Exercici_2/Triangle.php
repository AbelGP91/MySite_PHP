
<?php

class Triangle extends Shape {

    public function calcularArea (){

        $areaTriangle = ($this->ample*$this->alt)/2;
        echo "L'area del Triangle és de " . $areaTriangle . "<br>";

    }

}

?>