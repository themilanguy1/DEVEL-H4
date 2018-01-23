<?php
$oldprice = 30;

if($oldprice>150) {
    $verhoging = 1.19;
    $newprice = $oldprice * $verhoging;
}
if($oldprice<150 && $oldprice>55) {
    $verhoging = 1.16;
    $newprice = $oldprice * $verhoging;
}
if($oldprice<55) {
    $verhoging = 1.11;
    $newprice = $oldprice * $verhoging;
}

echo "Oude prijs: &euro;$oldprice. Na verhoging van $verhoging % is de prijs: &euro;$newprice";



?>