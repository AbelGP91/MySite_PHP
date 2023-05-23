
<?php

class Demo {

    private $nom = "";

    public function __construct (string $nom){

        $this->nom = $nom;

    }

    public function getFile(){

        return __FILE__;


    }

    public function getDir(){

        return __DIR__;

    }

}

?>