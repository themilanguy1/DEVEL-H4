<?php
$leeftijd = 18;
$illegaal = false;


if($leeftijd>=16) {
    echo "Je mag praktijkexamen voor je scooterrijbewijs doen.";
}
else {
    echo "Je mag praktijkexamen voor je scooterrijbewijs niet doen.";
}

echo "<br>";

if($illegaal == true) {
    echo "Je mag niet stemmen, want je bent illegaal";
}
else {
    if($leeftijd>=18) {
        echo "Je mag stemmen, want je bent al 18";
    }
    else {
        echo "Je mag nog niet stemmen, want je bent nog geen 18";
    }
} 
?>