
<?php

abstract class Shape {

protected int $ample = 0;
protected int $alt = 0;

public function __construct (int $ample, int $alt){

    $this->ample = $ample;
    $this->alt = $alt; 
  
}

public abstract function calcularArea();

}

?>