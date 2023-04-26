<?php

// BREAK --> Declaración de interrupción

echo "<pre>";


for ($i=0; $i <= 20 ; $i++) { 
    
    echo "Número: $i <br>";
    if ($i == 10) {
        
        break;

    }
}

echo "<br>";

for ($i=0; $i <= 16 ; $i++) { 
        
    if ($i == 8) {
        echo "<br>";
        echo "Omitimos el valor de $i <br>";
        echo "<br>";
        continue;

    }

    echo "Número $i <br>"; 

}


echo "</pre>";

?>