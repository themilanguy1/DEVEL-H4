<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-family: monospace;
        }
        h1 {
            border-bottom: greenyellow solid;
            width: fit-content;
        }
    </style>
</head>
<body>
<?php
    $time = date('H');

    echo "<h1>Opdracht 1</h1><p>";

    echo "Het is nu ";

    if ($time < 6) {
        echo "nacht";
    } elseif ($time < 12) {
        echo "ochtend";
    } elseif ($time < 18) {
        echo "middag";
    } elseif ($time < 24) {
        echo "avond";
    }

    echo "</p><h1>Opdracht 2</h1><p>";

    echo "Het is nu ";

    switch($time) {
        case ($time < 6) : echo "nacht";      break;
        case ($time < 12) : echo "ochtend";   break;
        case ($time < 18) : echo "middag";    break;
        case ($time < 24) : echo "avond";     break;
    }
    
    echo "</p><h1>Opdracht 3</h1><p>";

    $num = array(16, 70);

    echo "nummers:";
    
    foreach ($num as $p) echo "$p ";

    echo "<br> Total: <h3>";

    print($num[0] > $num[1] ? $num[0] * 2 + 9 : $num[1] * 2 + 9 . "</h3>");

    echo "</p><h1>Opdracht 4</h1><p>";

    $Money = 170;

    if ($Money > 150) {
        $NewMoney = $Money*1.19;
    } elseif ($Money < 55) {
        $NewMoney = $Money*1.11;
    } else {
        $NewMoney = $Money*1.16;
    }

    echo "Prijs is &euro; $Money en is nu &euro; $NewMoney geworden. Jammer joh had je eerder maar moeten kopen!";

    echo "</p><h1>Opdracht 4</h1><p>";

    $num = array(2, 15, 20, 45, 42, 65, 87, 32, 94);

    foreach ($num as $n) print($n % 2 == 0 ? "$n: even<br>" : "$n: odd<br>");

    echo "</p><h1>Opdracht 5</h1><p>";

?>
</body>
</html>

