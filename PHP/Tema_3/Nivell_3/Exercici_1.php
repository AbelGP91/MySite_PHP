
<?php

$numeros = array (10, 15, 20, 25,  30, 35, 40, 45, 50, 55, 60);

function elevarCubo($n){

    return ($n * $n * $n);

}

$resultat = array_map("elevarCubo",$numeros);

echo "El resultat dels valors de l'array elevats al cub és: " . "<br>" . "<br>";

for ($i=0;$i<sizeof($resultat);$i++){

    echo $resultat[$i] . "<br>";
    
}

?>
