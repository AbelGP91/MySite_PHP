
<?php

include "Demo.php";

$myDemo = new Demo("");

echo $myDemo -> nom . "<br>";
echo $myDemo -> cognom . "<br><br>";

$myDemo -> nom = "Beatriz";
$myDemo -> cognom = "Ponce";

echo "<br>" . $myDemo -> nom . "<br>";
echo $myDemo -> cognom;

?>