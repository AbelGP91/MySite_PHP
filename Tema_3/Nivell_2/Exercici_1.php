
<?php

$arrayNums1 = [1,2,3,4,5,6,11,7];
$arrayNums2 = [1,3,5,7,9,11];

$arrayInter = array_intersect($arrayNums1, $arrayNums2);

echo "Els nombres en comú dels arrays són: <br> <br>";

foreach ($arrayInter as $valor) {
    
    echo $valor . "<br>";
}

echo "<br>";

/*

for ($i=0; $i < sizeof($arrayNums1); $i++) { 
    
    if (in_array($arrayNums1[$i], $arrayNums2)==true){

        echo "El número " . $arrayNums1[$i] . " es troba en ambdos Array" . "<br>";

    }
  
}

*/

$arrayMezcla = array_merge($arrayNums1,$arrayNums2);

echo "El resultat de la mescla dels arrays és: <br> <br>";

foreach ($arrayMezcla as $valor) {
    
    echo $valor . "<br>";
}

echo "<br>";


?>