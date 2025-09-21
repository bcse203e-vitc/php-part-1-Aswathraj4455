<?php
$age = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo "Original Array:<br>";
print_r($age);
echo "<br><br>";

echo "a) Ascending order sort by Value:<br>";
$asc_value = $age;
asort($asc_value);
print_r($asc_value);
echo "<br><br>";

echo "b) Ascending order sort by Key:<br>";
$asc_key = $age;
ksort($asc_key);
print_r($asc_key);
echo "<br><br>";

echo "c) Descending order sort by Value:<br>";
$desc_value = $age;
arsort($desc_value);
print_r($desc_value);
echo "<br><br>";

echo "d) Descending order sort by Key:<br>";
$desc_key = $age;
krsort($desc_key);
print_r($desc_key);
?>
