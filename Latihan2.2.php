<?php
$x = 5;
function myTest() {
    global $x;
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>