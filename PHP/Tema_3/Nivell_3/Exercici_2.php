

<?php

$strings = array ("Abel" , "Beatriz" , "Tokyo" , "Isabel");

function contarCaracteresPar($paraula){

    return (strlen($paraula)%2==0);

}

function contarCaracteresImpar($paraula){

    return (strlen($paraula)%2!=0);

}


$resultat1 = array_filter($strings,"contarCaracteresPar");
$resultat1 = array_values($resultat1);

$resultat2 = array_filter($strings,"contarCaracteresImpar");
$resultat2 = array_values($resultat2);


echo "Els Strings de l'array amb un nombre parell de caràcters: " . "<br>" . "<br>";

for ($i=0;$i<sizeof($resultat1);$i++){

    echo $resultat1[$i] . "<br>";
    
}

echo "<br>" . "Els Strings de l'array amb un nombre imparell de caràcters: " . "<br>" . "<br>";

for ($i=0;$i<sizeof($resultat2);$i++){

    echo $resultat2[$i] . "<br>";
    
}


?>