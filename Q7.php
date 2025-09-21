<?php

$x = array(1, 2, 3, 4, 5);

echo "Original array :<br>";
echo implode(" ", $x) . "<br>";

array_splice($x, 3, 0, '$');

echo "After inserting '\$' the array is :<br>";
echo implode(" ", $x);
?>
