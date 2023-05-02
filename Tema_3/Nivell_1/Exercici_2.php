
<?php

$X = array (10, 20, 30, 40, 50, 60);

echo "La mida de l'Array és de: " . sizeof($X);

unset ($X[3]);

$X = array_values($X);

/* $nuevoX = [];

foreach ($X as $posicion => $numeros){
      
    $nuevoX[] = $numeros;
      
}

*/

echo "<br>";

var_dump ($X);

echo "<br>";

echo "La mida de l'Array és de: " . sizeof($X);

?>