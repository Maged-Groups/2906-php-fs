<?php

const VAT = 0.14;

function sales($price)
{

    static $total = 0;


    $vat = calc_vat($price);


    $total += $price + $vat;


    echo "<h4>Total is $total</h4>";

}


function calc_vat($amount)
{
    return VAT * $amount;
}



sales(1000);
sales(2000);
sales(2500);
sales(2000);
sales(2000);