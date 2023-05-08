<html>

    <head>

        <title>Pruebas</title>

    </head>

    <body>
    
    <?php
    
    class Cabecera {

        private $titulo;
        private $ubicacion;

        public function __construct ($tit){

            $this->titulo=$tit;
            
            // $this->ubicacion=$ubi;

        }

        public function graficar() {

            /*

            echo '<div style = "font-size:40px; text-align: center">';
            echo $this->titulo;
            echo '</div>';

            */

            echo '<h1 style = "text-align:center">' . $this->titulo . '</h4>';

        }

    }

    class Cuerpo {

        private $lineas=array();

        public function insertarParrafo($li){

            $this->lineas[] = $li;

        }

        public function graficar(){

            for ($f=0;$f<count($this->lineas);$f++){

                echo '<p style = "text-align:center">' . $this->lineas[$f] . '</p>';
            }

        }

    }

    class Pie {

        private $titulo;

        public function __construct ($tit){

            $this->titulo=$tit;

        }

        public function graficar (){

            echo '<h4 style = "text-align:center">' . $this->titulo . '</h4>';

        }

    }

    class Pagina {

        private $cabecera;
        private $cuerpo;
        private $pie;

        public function __construct($texto1,$texto2){

            $this->cabecera = new Cabecera ($texto1);
            $this->cuerpo = new Cuerpo();
            $this->pie = new Pie ($texto2);

        }

        public function insertarCuerpo($texto){

            $this->cuerpo->insertarParrafo($texto);

        }

        public function graficar(){

            $this->cabecera->graficar();
            $this->cuerpo->graficar();
            $this->pie->graficar();

        }

    }

    $pagina1 = new Pagina ("Titulo de la página", "Pie de la página");
    $pagina1->insertarCuerpo("Esto es la primera prueba que debe aparecer dentro de la página");
    $pagina1->insertarCuerpo("Esto es la segunda prueba que debe aparecer dentro de la página");
    $pagina1->insertarCuerpo("Y así succesivamente");
    $pagina1->graficar();

    ?>

    </body>

</html>