<?php
$temps = array(
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 
    73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
);

$avg_temp = array_sum($temps) / count($temps);

sort($temps);

$lowest = array_slice($temps, 0, 7);

$highest = array_slice($temps, -7);

echo "Average Temperature is : " . round($avg_temp, 1) . "<br>";
echo "List of seven lowest temperatures : " . implode(", ", $lowest) . "<br>";
echo "List of seven highest temperatures : " . implode(", ", $highest);
?>
