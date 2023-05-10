
<?php

function crearArray($limite){

    for($i=2;$i<=$limite;$i++) {

    $numeros[$i] = true; 
    
    }

    return $numeros;

}

function buscarPrimos($limite,$numeros){    

    for ($n=2;$n<=$limite;$n++){
    
    if ($numeros[$n] == true){

        for ($i=$n*$n;$i<$limite;$i+=$n){

        $numeros[$i] = false;

        }

    }

    }

    return $numeros;

}

function imprimirPrimos($numeros,$limite){

    echo "Primos: ";

    for ($n = 2; $n <= $limite; $n++){

    if ($numeros[$n]==true)

        {

        echo $n . " ";

        }

    }

}

function suma ($carry,$item){

    $carry += $item;
    return $carry;

}

$limite = 25;

$arrayPrimos = buscarPrimos($limite,crearArray($limite));

array_values($arrayPrimos);
imprimirPrimos($arrayPrimos,$limite);
// echo "<br>" . "<br>";

// var_dump($arrayPrimos);
// echo "<br>" . "<br>";

$arrayFinal = array();

foreach ($arrayPrimos as $key => $value) {
    
    if ($value==true){
    
        $arrayFinal[] = $key;
    
    }

}


// var_dump($arrayFinal);
// echo "<br>";

$resultat = array_reduce($arrayFinal,"suma");

echo "<br>" . "<br>" . "El resultat de la suma dels nombres primers és: " . $resultat;
    



?>