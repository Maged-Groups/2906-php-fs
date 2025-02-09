<?php

$x = 10;

$y = 3;

function res($msg, $n1, $n2, $val)
{
    echo "Number 1: $n1";
    echo '<br />';
    echo "Number 2: $n2";
    echo '<br />';
    echo $msg;

    echo $val;

    echo '<hr />';
}

res('Sum: ', $x, $y, $x + $y);

res('Subtract: ', $x, $y, $x - $y);

res('Multiply: ', $x, $y, $x * $y);

res('Divid: ', $x, $y, $x / $y);

res('power: ', $x, $y, $x ** $y);

res('remain: ', $x, $y, $x % $y);