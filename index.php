<!DOCTYPE html>
<html>
<body>

<?php

echo "ex1:<br>";
$int = -4;
$double = 2.3;
$string ="string";
$bool=true;

echo $int . "<br>" . $double . "<br>" . $string . "<br>" . $bool . "<br>";

echo "ex2:<br>";

$hw="Hello, World!";
echo $hw . "<br>";

echo strtoupper($hw) . "<br>";

echo strlen($hw) . "<br>";

echo strrev($hw) . "<br>";

$str2="Aquest es el curs de PHP";

echo $hw . $str2 . "<br>";

echo "ex3:<br>";

define("nom","Enric");

echo "<h1><strong>". nom ."</strong></h1>";

echo "ex4:<br>";

$X=1;
$Y=2;
$N=3.3;
$M=4.4;

echo $X . " " . $Y . "<br>";

echo $X+$Y . "<br>";

echo $X-$Y . "<br>";

echo $X*$Y . "<br>";

echo $X%$Y . "<br>";

echo "ex5:<br>";

$array1=array(1,2,3,4,5);
$array2=array(1,2,3);

$array2=array_merge($array1,[4]);

$array12=array_merge($array1,$array2);
echo sizeof($array12) . "<br>";

var_dump($array12);

?>

</body>
</html> 