<?php

include "tigger.php";

$s1 = Tigger::getInstance();
$s2 = Tigger::getInstance();
$s3 = Tigger::getInstance();

if (($s1 === $s2) && ($s1 === $s3) && ($s2 === $s3)) {

    echo "El Singleton funciona. Todas las variables contienen la misma instancia" . "<br>";

} 
    
else {

    echo "Singleton failed";

}

$s1 -> roar();
$s2 -> roar();
$s3 -> roar();

$s1 -> getCounter();



?>