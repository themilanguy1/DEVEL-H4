<?php

$time = date("G");
echo "het is $time uur <br>";

if($time<6) {
    echo "Het is nacht";
}
else if($time<12) {
    echo "Het is ochtend";
}
else if($time<18) {
    echo "Het is middag";
}
else if($time<24) {
    echo "Het is avond";
}
?>