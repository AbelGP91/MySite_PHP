<!DOCTYPE html>
<html lang="en">
<head>
    <title>Embedded PHP</title>
</head>
<body>

    <h1>
         <?php

         $str = "Mi nombre es Abel "; // Detecta la variable automàticamente como un String
         $num = 91;                  // Detecta la variable automàticamente como un Integer    

         echo "Hello, world! \n "; // El ECHO nos permite devolver un print           
                           
         echo $str;
                  
         echo $num;

         $foo = array(1,2,3);   // Creamos un Array de Integers
         echo $foo[0];          // Devolvemos el valor en la posición 0

         ?>
    </h1>

</body>
</html>