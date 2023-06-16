<?php

class Jugador {

    public string $nombre = "";
    public int $edad = 0;
    public string $posicion = "";
    public int $numGoles = 0;
    public int $faltasRecibidas = 0;
    public int $faltasRealizadas = 0;

function __construct(string $nombre, int $edad, string $posicion, int $numGoles, int $faltasRecibidas, int $faltasRealizadas){

    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->posicion = $posicion;
    $this->numGoles = $numGoles;
    $this->faltasRecibidas = $faltasRecibidas;
    $this->faltasRealizadas = $faltasRealizadas;

}

}



?>