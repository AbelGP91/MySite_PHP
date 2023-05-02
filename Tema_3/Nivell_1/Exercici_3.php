
<?php 

$paraules = [
    
    "hola",
    "php",
    "html"

];

$lletra = "p";

// var_dump ($paraules);

buscaLletra($paraules,$lletra);

function buscaLletra($paraules,$lletra){

    $control = true;

    for ($i=0;$i<sizeof($paraules);$i++){

        $coincidencia = strpos($paraules[$i],$lletra);

        if ($coincidencia === false){

        $control = false;
        
        break;

        }

    }

if ($control === true){

    echo "La lletra " . $lletra . " es troba en totes les paraules!";

}

else {

    echo "La lletra " . $lletra . " no s'ha trobat en totes les paraules";

}

}

?>
