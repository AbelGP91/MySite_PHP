
<?php

//Criba de Eratóstenes

$limite=20;

for($i=2;$i<=$limite;$i++) {

  $numeros[$i] = true;
  
  /* 

  var_dump ($numeros);
  echo "<br>";

  */

}

// Recorrem l'Array, on per cada nombre Primer busquem els múltiples

for ($n=2;$n<$limite;$n++){
  
  if ($numeros[$n] == true){

    for ($i=$n*$n;$i<$limite;$i+=$n){

       $numeros[$i] = false;

    }

  }

}

// Llista de nombres Primers

echo "Primos: ";

for ($n = 2; $n < $limite; $n++){

  if ($numeros[$n]==true)

    {

      echo $n . " ";

    }

}

?>