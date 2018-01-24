<html>
<head>
<title>H4 opdrachten</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="opdrachtstylesheet.css">
</head>
<body>
    <div class="container-flex">
        <div class="echteheader text-center">
        <h2>Hoofdstuk 4 PHP/MySQL boek opdrachten</h2>
        <a href="https://www.ictacademie.info/milangupta/downloads/H4-opdrachten.zip">
        <button class="btn btn-primary">Zip download</button>
        </a>
        <a href="https://www.ictacademie.info/milangupta/downloads/DEVEL 10 toetsvragen H4.docx">
        <button class="btn btn-primary">H4 Toetsvragen</button>
        </a>
        </div>

        <p>hallo</p>

        <div class="row">
            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 1</h3>
            </div>
            

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

            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 2</h3>
            </div>

            <?php
            $time = date('H');

            echo "Het is nu ";

            switch($time) {
                case ($time < 6) : echo "nacht <br>";
                case ($time < 12) : echo "ochtend <br>";
                case ($time < 18) : echo "middag <br>";
                case ($time < 24) : echo "avond <br>";
            }
            ?>

            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 3</h3>
            </div>

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

            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 4</h3>
            </div>

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

            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 5</h3>
            </div>

            <?php
            $var = 3;
            if ($var % 2 == 0) {
            echo "Is het getal $var even? Ja";
            }
            else {
                echo "Is het getal $var even? Nee";
            }


            ?>

            </div>


            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 6</h3>
            </div>

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



            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 7</h3>
            </div>

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

            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 8</h3>
            </div>

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

            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 9</h3>
            </div>

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




            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 10</h3>
            </div>

            <?php
            $getal = 8;

            for($x=0; $x <=$getal; $x++) {
                echo "$x +";
            }
            echo " = $getal";
            ?>

            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 11</h3>
            </div>

            <?php
            $n = 7;

            $x= 1;
            $array1 = array();

            while($x <= $n) {
                array_push($array1, $x);
                $x++;
            }

            $xold = $x-1;
            echo "De faculteit van $xold = " .array_product($array1);

            ?>


            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 12</h3>
            </div>

            <?php
            $euro = 1;
            $dollar = 1.12651;
            $pond = 0.79494;
            $yen = 119.524;
            $roepi = 75.559;
            $maxtabel = 10;


            echo "<table><th>Euro</th><th>Dollar</th><th>pond</th><th>yen</th><th>roepi</th>";

            for($euro=1; $euro<=$maxtabel;$euro=$euro+1) {
                $dollarcurrent = ($dollar * $euro);
                $pondcurrent = ($pond * $euro);
                $yencurrent = ($yen * $euro);
                $roepicurrent = ($roepi * $euro);
                echo "<tr><td>$euro</td>";
                echo "<td>$dollarcurrent</td>";
                echo "<td>$pondcurrent</td>";
                echo "<td>$yencurrent</td>";
                echo "<td>$roepicurrent</td>";
            }
            echo "</table>"



            ?>

            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 13</h3>
            </div>

            <?php
            $m = 1;
            $km = 1.609;
            $maxtabel = 10;


            echo "<table><th>Miles</th><th>Kilometers</th>";
            for($m=1; $m<=$maxtabel; $m=$m+1) {
                $kmcurrent = ($m * $km);
                echo "<tr><td>$m</td>";
                echo "<td>$km</td></tr>";

            }
            echo "</table>";
            ?>

            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 14</h3>
            </div>

            <?php
            $m = 1;
            $km = 1.609;
            $maxtabel = 20;


            echo "<table><th>Miles</th><th>Kilometers</th><th>Miles</th><th>Kilometers</th>";
            for($m=1; $m<=$maxtabel; $m=$m+1) {
                echo "<tr><td>$m</td>";
                echo "<td>" . ($m*$km) . "</td>";
                echo "<td>" . ($m+20) . "</td>";
                echo "<td>" . ($m+20)*$km . "</td><tr>";


            }
            echo "</table>";

            ?>

            </div>

            <div class="col-sm-5 doos">
            <div class="headeropdracht text-center">
            <h3>Opdracht 15</h3>
            </div>

            <?php

            $maxtabel = 6;

            echo "<table> <th></th> <th></th> <th></th> <th></th> <th></th> <th></th>";
            for($x=1; $x<=$maxtabel; $x=$x+1) {
                echo "<tr> <td>$x</td> </tr>";
            }


            ?>

            </div>
        </div>
    </div>
</body>
</html>