
<?php

class PokerDice {

    private $costados = array("As", "K", "Q", "J", 8, 7);
    private $cara;
    static private $totalThrows;

    public function __construct(){
                   
        $this->cara = $this->costados[$this->throwDice()];
                
    }   

    function throwDice() {
        
        self::$totalThrows++;
        $cara = rand(0,5);
        return $cara;

    }

    function shapeName() {

        echo "El resultat de la tirada " .  self::$totalThrows . " és " . $this->cara . "<br>";

    }

    public static function getTotalThrows() {

        echo self::$totalThrows; 

       }

}

$dado1 = new PokerDice();
$dado1->shapeName();
$dado2 = new PokerDice();
$dado2->shapeName();
$dado3 = new PokerDice();
$dado3->shapeName();
$dado4 = new PokerDice();
$dado4->shapeName();
$dado5 = new PokerDice();
$dado5->shapeName();


echo "<br><br>" . "El número total de tirades és de ";
echo Pokerdice::getTotalThrows();