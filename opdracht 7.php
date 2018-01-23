<?php
$scooter = 1500;
$spaargeld = 1600;
$verschil = ($scooter - $spaargeld);

if($spaargeld<1000) {
    echo "Je spaargeld is nu: $spaargeld. Je komt dus $verschil euro te kort! Je kan beter nog even een baantje gaan zoeken.";
}
if($spaargeld<1500 && $spaargeld>1000) {
    echo "Je spaargeld is nu: $spaargeld. Je komt dus $verschil euro te kort! Het lukt bijna dus nog even doorsparen!";
}
if($spaargeld>1500) {
    $verschil = ($spaargeld - $scooter);
    echo "Je spaargeld is nu: $spaargeld, hiermee is het mogelijk om de scooter te kopen! Je hebt nog $verschil over voor de benzine.";
}


?>