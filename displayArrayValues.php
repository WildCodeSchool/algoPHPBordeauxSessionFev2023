<?php
echo "<h3>Exercises</h3>";
echo "<p>Create an array of 10 elements and use a function to display each element (on by line).</p>";

echo "<h3>Solution</h3>";
$tab = ['Naruto', 'MHA', 'DBZ', 'Demon Slayer', 'Attack on Titan', 'Jujutsu Kaisen', 'Chainsaw Man', 'Hunter X Hunter', 'Death Note'];

function displayArrayValues(array $tab): void
{
    foreach ($tab as $value) {
        echo $value . "<br>";
    }
}

displayArrayValues($tab);

