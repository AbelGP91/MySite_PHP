
<?php


$numXocolata = 2;
$numXiclets = 1;
$numCaramels = 1;

$cost = preuXocolata($numXocolata) + preuXiclet($numXiclets) + preuCarmels($numCaramels);

echo "El preu total de la comanda és de " . $cost . " euros";

// FUNCIONS

function preuXocolata($xocolata){

    return $xocolata*1;

}

function preuXiclet($xiclet){

    return $xiclet*0.5;
    
} 

function preuCarmels($caramel){

    return $caramel*1.5;

}

?>