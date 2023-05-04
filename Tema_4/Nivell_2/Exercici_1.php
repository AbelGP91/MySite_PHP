
<?php

$dado1 = new PokerDice;
$dado2 = new PokerDice;
$dado3 = new PokerDice;
$dado4 = new PokerDice;
$dado5 = new PokerDice;

class PokerDice {

    var $cara = "";
        
    function setCara($cara){

        $this->cara = $cara;

    }
    
}

function lanzarDado() {    
        
    $valor = rand (1,6);
    return $valor;
    
}

function shapeName($valor){

    switch ($valor) {

        case 1:
            $cara = "A";
            break;
        
        case 2:
            $cara = "K";
            break;
            
        case 3:
            $cara = "Q";
            break;
        
        case 4:
            $cara = "J";
            break;
        
        case 5:
            $cara = "8";
            break;
        
        case 6:
            $cara = "7";
            break;                
       
    }
    
    echo "En la última tirada ha sortit: " . $cara;
    echo "<br>";
    return $cara;

}

function getTotalThrows ($resultats) {

    echo "El resultat de totes les tirades és el següent:";
    print_r(array_count_values($resultats));          

}

echo "<pre>";

$resultats = [];

for ($i=0; $i < 5; $i++) { 
    
    $tirada = lanzarDado();
    // echo "<br>";
    // var_dump($tirada);
    $cara=shapeName($tirada); 
    $resultats[] = $cara;

}

$dado1->setCara($resultats[0]);
$dado2->setCara($resultats[1]);
$dado3->setCara($resultats[2]);
$dado4->setCara($resultats[3]);
$dado5->setCara($resultats[4]);

echo "<br>";

getTotalThrows($resultats);

echo "</pre>";

?>