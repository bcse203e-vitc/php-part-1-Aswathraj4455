

<?php
$color = array('white', 'green', 'red');


foreach ($color as $c) {
    echo "<span style='color:$c;'>$c</span>, ";
}

echo "<br><br>";


foreach ($color as $c) {
    echo "• <span style='color:$c;'>$c</span><br>";
}
?>

