<?php
$var1 = 10;
$var2 = 15;

if($var1==$var2) {
    echo "getallen zijn gelijk";
}
else {
    if($var1>$var2) {
    $var1=$var1*2;
    $var1=$var1+$var2;
    echo "uitkomst = ".$var1;
    }   
    if($var2>$var1) {
    $var2=$var2*2;
    $var2=$var2+$var1;
    echo "uitkomst = ".$var2;
    }
}


?>