<?php

class Tigger {

    protected static $instance = null;
    protected static $contador = 0;

    protected function __construct(){

        echo "New Tigger Instance is Created!" . "<br>";

    }

   public static function getInstance(): Tigger{
        
        if(!isset(self::$instance)){
            
            self::$instance = new Tigger();

        }

        else {

            echo "La Instancia ya existe!" . "<br>";

        }
        
        return self::$instance;

   }

   public function roar(){

        echo "Grrr!" . "<br>";
        self::$contador++;

   }

   public function getCounter(){

        echo "El nombre de rugits total és de: " . self::$contador;

   }
    
}

?>