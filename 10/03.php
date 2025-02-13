<h1>Arrays</h1>

<pre>

<?php
$prices = [50, 30, 20, 15, 66, 80, 40, 50, 6, 22, 30, 21, 11, 21, 2, 60];

function increase($price)
{
    return $price + 1;
}


$new_prices = array_map('increase', $prices);

var_dump($new_prices);