<?php 

// 5 + 4 * 3 / 2 - 1 = ?
// 5 + 12 / 2 - 1
// 5 + 6 - 1
// 11 - 1
// 10

// 5 + (4 * 3) / 2 - 1 = 10
// 5 + (4 * 3 / 2) - 1 = 10
// 5 + (4 * 3 ) / (2 - 1) = 17

$total = 0;
$vat = 0.14;

// Order 1
$order_1 = 1000;
$total = $total + $order_1 + $order_1 * $vat;
echo $total;
echo '<hr>';

// Order 2
$order_2 = 500;
$total = $total + $order_2 + $order_2 * $vat;
echo $total;
echo '<hr>';

// Order 3
$order_3 = 500;
$total = $total + $order_3 + $order_3 * $vat;
echo $total;
echo '<hr>';

// Order 4
$order_4 = 500;
$total = $total + $order_4 + $order_4 * $vat;
echo $total;
echo '<hr>';

// Order 5
$order_5 = 500;
$total = $total + $order_5 + $order_5 * $vat;
echo $total;
echo '<hr>';




