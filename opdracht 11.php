<?php
$n = 5;

$x= 1;
$array1 = array();

while($x <= $n) {
    array_push($array1, $x);
    $x++;
}

$xold = $x-1;
echo "De faculteit van $xold = " .array_product($array1);

?>
