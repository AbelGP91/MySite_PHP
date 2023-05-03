
<?php

$arrayNums1 = [1,2,3,4,5,6,11,7];
$arrayNums2 = [1,3,5,7,9,11];

for ($i=0; $i < sizeof($arrayNums1); $i++) { 
    
    if (in_array($arrayNums1[$i], $arrayNums2)==true){

        echo "El número " . $arrayNums1[$i] . " es troba en ambdos Array" . "<br>";

    }
  
}

?>