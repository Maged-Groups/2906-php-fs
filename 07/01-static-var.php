<?php

function sales($price)
{
    static $total = 0;

    $total += $price;

    echo "<h4>Total is $total</h4>";

}


sales(1000);
sales(2000);