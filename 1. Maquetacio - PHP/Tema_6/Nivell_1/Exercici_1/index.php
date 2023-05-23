
<?php

$DATOS1 = $_POST["nom"];
$DATOS2 = $_POST["cognoms"];

function imprimirDatos(){

    echo "Tu nombre es: " . $GLOBALS["DATOS1"] . "<br>";
    echo " Y tus apellidos son: " . $GLOBALS["DATOS2"] . "<br>";

}


imprimirDatos();

?>