<?php

$curso = strtolower("Java"); // Funcion que nos devuelve el STR en minúsculas

switch ($curso) {
    
    case 'java':

        echo "Java desde cero";
        break;
    
    case 'python':

        echo "Python desde cero";
        break;  
        
    case 'javascript':

        echo "Javascript desde cero";
        break;
    
    default:
        echo "No se ha asignado ningun curso";
        break;
}

?>