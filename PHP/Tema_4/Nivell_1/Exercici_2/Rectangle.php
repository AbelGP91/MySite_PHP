
<?php

class Rectangle extends Shape {

    public function calcularArea(){
        
        $areaRectangle = ($this->ample*$this->alt);
        echo "L'area del Rectangle és de " . $areaRectangle . "<br>";

    }
    
}


?>