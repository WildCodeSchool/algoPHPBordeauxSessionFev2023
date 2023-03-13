<?php
echo "<h3>Exercises</h3>";
echo "<p>Create a function to calculate the average of 3 elements</p>";

echo "<h3>Solution</h3>";
function calcAverage(int $a, int $b, int $c): float {
    return ($a +$b + $c) / 3;
}

$res = calcAverage(3, 14.7, 8);
echo "<p>The average is $res</p>";