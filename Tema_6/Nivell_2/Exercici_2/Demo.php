
<?php

class Demo {

    protected $nom = "Abel";
    protected $cognom = "Galindo";
    
    public function __get($property) {

        if (property_exists($this, $property)) {

            return $this->$property;

        }

    }

    public function __set($property, $value) {

        if (property_exists($this, $property)) {

            $this->$property = $value;
            echo "Se han modificado los datos" . "<br>";

        }

        

    }     
    
}
    

?>