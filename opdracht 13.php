<html>
<head>
<title>opdracht 13</title>
<link rel="stylesheet" type="text/css" href="opdrachtstylesheet.css">
</head>
<body>

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


?>

</body>
</html>