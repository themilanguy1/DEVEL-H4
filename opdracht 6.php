<?php
$var = 1024;
echo "Het getal $var<br>";

$deler1 = 5;
$deler2 = 6;


$var1 = $var / $deler1;
$var2 = $var / $deler2;
if(ctype_digit((string)$var1)) {
    echo "Deelbaar door $deler1";
}
else {
    echo "Niet deelbaar door $deler1";
}

if(ctype_digit((string)$var2)) {
    echo " en wel deelbaar $deler2";
}
else {
    echo " en niet deelbaar door $deler2";
}
?>

