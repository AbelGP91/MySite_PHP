
<?php



class Employee {

    public string $nom = '';
    public int $sou = 0;
    
    function __construct(string $nom, int $sou){

        $this->nom = $nom;
        $this->sou = $sou;
        
    }

    function imprimir(){

        echo $this->nom;
        echo "<br>";
        echo $this->sou;
        echo "<br>";

        if ($this->sou > 6000){
    
            echo $this->nom . " ha de pagar impostos" . "<br>" . "<br>";
    
        }
    
        else {
    
            echo $this->nom . " no ha de pagar impostos" . "<br>" . "<br>";
    
        }
    
    }    

}

?>