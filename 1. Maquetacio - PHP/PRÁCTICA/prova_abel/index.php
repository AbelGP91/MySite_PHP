<?php

include "Jugador.php";

$jugador1 = new Jugador("Abel",31,"Centrocampista",0,4,1);
$jugador2 = new Jugador("Abel2",31,"Centrocampista",1,4,2);
$jugador3 = new Jugador("Abel3",31,"Centrocampista",5,4,6);
$jugador4 = new Jugador("Abel4",31,"Centrocampista",2,4,4);
$jugador5 = new Jugador("Abel5",31,"Centrocampista",10,4,5);

$jugadores = array($jugador1,$jugador2,$jugador3,$jugador4,$jugador5);

$goles = 0;
$goleador = "";
$faltas = 1000;
$amonestado = "";


foreach ($jugadores as $valor){

    if ($valor->numGoles>$goles){

        $goles = $valor->numGoles;
        $goleador = $valor->nombre;

    }

}

echo "El jugador goleador és " . $goleador . "<br>";

foreach ($jugadores as $valor){

    if ($valor->faltasRealizadas<$faltas){

        $faltas = $valor->faltasRealizadas;
        $amonestado = $valor->nombre;

    }

}

echo "El jugador con menos faltas realizadas és " . $amonestado . "<br>";




/*

nombre
edad
posicion -> portero,defensa,centrocampista, delantero
numero goles totales temporada
num faltas recibidas
num faltas realizadas

5 jugadores

procesos:

1. jugador mas goleador
2. jugador menos faltas comete

*/

?>









