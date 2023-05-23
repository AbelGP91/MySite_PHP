
<?php

$durada = 4;
echo "La durada de la trucada és de " . $durada . " minuts <br>";

precio($durada);

function precio ($durada){

    $precio = 0;

    if ($durada<=3.59){

        $precio = 0.1;
        echo "El preu de la trucada és de " . $precio;
                

    }

    else {

        $durada=$durada-3;
        $precio = 0.1 + (floor($durada)*0.05);
        echo "El preu de la trucada és de " . $precio . " euros";
    }

}


?>