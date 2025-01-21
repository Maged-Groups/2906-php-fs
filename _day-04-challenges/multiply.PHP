

<?php


function multiply($number, $times) {
    for ($i = 1; $i <= $times; $i++) {
        echo "$number x $i = "  . ($number * $i) . " ";
        echo '<br>';
    }
}

multiply(9, 10);

