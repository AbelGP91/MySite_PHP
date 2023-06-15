
<?php

class Objeto {

    public string $nom = "";
    public string $director = "";
    public int $durada = 0;
    public string $genere = "";

    function __construct (string $nom, string $director, int $durada, string $genere){

        $this->nom = $nom;
        $this->director = $director;
        $this->durada = $durada;
        $this->genere=$genere;    

    }
    
}

?>