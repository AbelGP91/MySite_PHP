
<?php

$afegit = 2;

contador($afegit,20);

function contador($afegit,$limit=10){

    echo "<pre>";

    for ($contador=0; $contador <= $limit; $contador = $contador + $afegit) { 
        
        echo "El contador està en $contador <br>";
        
    }

    echo "</pre>";

}




?>