<html>
<head>
<title>opdracht 12</title>
<link rel="stylesheet" type="text/css" href="opdrachtstylesheet.css">
</head>
<body>

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

</body>
</html>