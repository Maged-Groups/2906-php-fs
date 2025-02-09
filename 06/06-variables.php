<?php

// Global scope
$total = 0;

const VAT = 0.14;
const SERVICE = 0.1;

function add_sales($price)
{
    global $total;
    // Local Scope

    $vat = calc_vat($price);
    $service = calc_service($price);

    $total += $price + $vat + $service;
}

function report()
{
    global $total;

    echo "<h2>Total is: $total</h2><hr />";
}

function refund($price)
{
    global $total;


    $vat = calc_vat($price);
    $service = calc_service($price);


    $total -= $price - $vat - $service;
}

function calc_vat($price)
{
    return $price * VAT;

}

function calc_service($price)
{
    return $price * SERVICE;
}

report();

add_sales(1000);
report();

add_sales(4500);
add_sales(5000);
add_sales(1500);
report();

refund(1000);

// calc_vat(1000);
report();
