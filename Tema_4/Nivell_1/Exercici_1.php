
<?php



class Employee {

    public string $nom = '';
    public int $sou = 0;
    
    function __construct(string $nom, int $sou){

        $this->nom = $nom;
        $this->sou = $sou;
        
    }

}

$miEmpleado = new Employee ('Abel',5500);

echo $miEmpleado->nom;
echo "<br>";
echo $miEmpleado->sou;
echo "<br>";

$nom = $miEmpleado->nom;
$sou = $miEmpleado->sou;

imprimir($nom,$sou);

function imprimir($nom,$sou){

    if ($sou > 6000){

        echo $nom . " ha de pagar impostos";

    }

    else {

        echo $nom . " no ha de pagar impostos";

    }

}



?>