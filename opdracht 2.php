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