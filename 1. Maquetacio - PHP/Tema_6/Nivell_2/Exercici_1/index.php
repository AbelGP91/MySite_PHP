
<?php

include "Demo.php";

$demo = new Demo ("prueba1");

echo "El pathing del archivo es: " . $demo->getFile() . "<br><br>";
echo "El directorio del archivo es: " . $demo->getDir();


?>