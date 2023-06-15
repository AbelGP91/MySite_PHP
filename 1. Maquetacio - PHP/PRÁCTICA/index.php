
<?php

include "Objeto.php";

$pelicula1 = new Objeto("Avatar", "George Cameron", 180, "Acció");
$pelicula2 = new Objeto ("Lost", "Abel Galindo", 300, "Drama");
$pelicula3 = new Objeto("Titanic", "George Cameron", 150, "Drama");

$peliculas = array($pelicula1,$pelicula2,$pelicula3);

foreach ($peliculas as $valor){

    $director = "George Cameron";

    if ($valor->director==$director){

        echo "La pelicula " . $valor->nom . " és del director " . $director . "<br>";

    }

    else{

        echo "La pelicula " . $valor->nom . " no és del director " . $director . "<br>";

    }

}






?>