<?php

echo "<h1>Opdracht 2</h1><br>";

$time = date("G");
echo "het is $time uur <br>";

switch(date("G")) {
    case >12:
        echo "Het is nacht";
    case >18: 
        echo "Het is ochtend";
}
?>