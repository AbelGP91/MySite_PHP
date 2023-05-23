<html>

<head>
    <title>Pruebas</title>   
</head>

<body>

<?php

    class Persona {

        private $nombre;

        public function inicializar ($nom){

            $this->nombre = $nom;

        }

        public function imprimir (){

            echo $this->nombre;
            echo "<br>";

        }

    }

    $pers1 = new Persona ();
    $pers1->inicializar("Juan");
    $pers1->imprimir();
    
    $pers2 = new Persona ();
    $pers2->inicializar("Anna");
    $pers2->imprimir();

?>

</body>

</html>