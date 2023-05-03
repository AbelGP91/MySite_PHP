
<?php

$notesAlumne = [

    "Abel" => [10,5,8,7,8],   
    "Beatriz" => [7,6,9,8,10],
    "Tokyo" => [5,8,6,7,8]

];

// var_dump ($notesAlumne);

// $alumne = "Abel";

mitjanaAlumne($notesAlumne);

function mitjanaAlumne ($notesAlumne){
    
    $mitjanaTotal = 0;

    foreach ($notesAlumne as $nombre => $valor) {

        $mitjanaAlumne = 0;
                     
        for ($i=0; $i < sizeof($notesAlumne[$nombre]); $i++) { 
            
            $mitjanaAlumne += $notesAlumne[$nombre][$i];

        }

        $mitjanaAlumne = ($mitjanaAlumne/5);

        echo "La mitjana de l'alumne " . $nombre . " és de " . $mitjanaAlumne . "<br>";

        $mitjanaTotal += $mitjanaAlumne;

    }



    $mitjanaTotal = $mitjanaTotal/sizeof($notesAlumne);
    echo "<br>";
    echo "La mitjana de la classe és de " . $mitjanaTotal;

}





?>