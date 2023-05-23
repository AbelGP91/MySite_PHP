
<?php

session_start();

$_SESSION ["miNombre"] = $_POST["nom"];
$_SESSION ["misApellidos"] = $_POST["cognoms"];

function imprimirDatos(){

    echo "Tu nombre es: " . $_SESSION["miNombre"] . "<br>";
    echo " Y tus apellidos son: " . $_SESSION["misApellidos"] . "<br>";

}


imprimirDatos();

echo "<br>";

?>

<p><a href="prueba.php"> Acceder a página de prueba</a></p>