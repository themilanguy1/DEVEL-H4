<html>
<head>
<title>opdracht 13</title>
<link rel="stylesheet" type="text/css" href="opdrachtstylesheet.css">
</head>
<body>

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

</body>
</html>