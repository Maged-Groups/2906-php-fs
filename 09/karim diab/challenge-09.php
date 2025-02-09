<?php

// Print Numbers from 1 to 10 using a while loop
echo "<h3>Print Numbers from 1 to 10 using a while loop</h3> ";
$i = 1;
while ($i <= 10) {
    echo $i . " <br>";
    $i++;
}

echo "<hr>";

// Reverse Countdown from 10 to 1 using a do-while loop
echo "<h3>Reverse Countdown from 10 to 1 using a do-while loop</h3>  ";
$j = 10;
do {
    echo $j . " <br>";
    $j--;
} while ($j >= 1);

echo "<hr>";

// Print Even Numbers up to 20 using a for loop
echo "<h3>Print Even Numbers up to 20 using a for loop</h3>  ";
for ($k = 2; $k <= 20; $k += 2) {
    echo $k . " <br> ";
}

echo "<hr>";

// Multiplication Table of 5 using a for loop
echo "<h3>Write a for loop that prints the multiplication table of 5 up to 5 × 10. (for)</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "  <tr>
            <th>Multiplier</th>
            <th>Result</th>
        </tr>";
for ($m = 1; $m <= 10; $m++) {
echo "  <tr>
            <td>5 x $m</td>
            <td>" . (5 * $m) . "</td>
        </tr>";
}
echo "</table>";

echo "<hr>";


// print the square of numbers from 1 to 5. (while)
echo "<h3>print the square of numbers from 1 to 5. (while)</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "  <tr>
            <th>Number</th>
            <th>Square</th>
        </tr>";
$n = 1;
while ($n <= 5) {
echo "  <tr>
            <td>$n</td>
            <td>" . ($n * $n) . "</td>
        </tr>";
    $n++;
}
echo "</table>";

echo "<hr>";

// Print the full multiplication table from 1 to 12
echo "<h3>Print the full multiplication table from 1 to 12</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
for ($x = 1; $x <= 12; $x++) {
echo "  <tr>
            <th colspan='2'>Multiplication Table of $x</th>
        </tr>";
    for ($y = 1; $y <= 12; $y++) {
echo "  <tr>
            <td>$x x $y</td>
            <td>" . ($x * $y) . "</td>
        </tr>";
    }
}
echo "</table>";
?>
