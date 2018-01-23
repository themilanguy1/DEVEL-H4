<?php
$var1 = 3;
$var2 = 10;
$var3 = 2.5;

$array1=array($var1,$var2,$var3);

$maxvar = max($array1);
$totaal = 0;
$array2 = array();

foreach($array1 as $item) {
    if(max($array1) != $item)  {
        array_push($array2,$item);
    }
}

$totaal = $array2[0] + $array2[1];

echo "getal 1: $var1<br>";
echo "getal 2: $var2<br>";
echo "getal 3: $var3<br>";
if($totaal>$maxvar) {
    echo "driehoek is mogelijk!";
}
else {
    echo "driehoek is niet mogelijk.";
}
?>


