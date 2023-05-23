
<?php 

$paraules = [
    
    "hola",
    "php",
    "html"

];

$lletra = "h";

// $control = true;

// var_dump ($paraules);

buscaLletra($paraules,$lletra);

function buscaLletra($paraules,$lletra){
    
    $control = true;
    
    for ($i=0;$i<sizeof($paraules) && $control;$i++){
              
        $control = str_contains($paraules[$i],$lletra);
                   
    }
    
    echo var_dump($control) . "<br>";

    if ($control){

        echo "La lletra " . $lletra . " es troba en totes les paraules!";
    
    }
    
    else{
    
        echo "La lletra " . $lletra . " no s'ha trobat en totes les paraules";
    
    }

}


?>
