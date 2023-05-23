
<?php

echo "<pre>";

$nota = 32;
$llindar = 100;

$notaFinal = $nota/$llindar;

notes($nota,$llindar);

function notes ($nota,$llindar){

    $notaFinal = ($nota/$llindar)*100;

    if ($notaFinal >= 60){

        echo "L'alumne és de Primera Divisió";

    }

    else if (($notaFinal>=45) && ($notaFinal<=59)){
        
        echo "L'alumne és de Segona Divisió";

    } 
    
    else if (($notaFinal>=33) && ($notaFinal<=44)){

        echo "L'alumne és de Tercera Divisió";
    }

    else {

        echo "L'alumne ha de recuperar";

    }
        
}
    





echo "</pre>";

?>