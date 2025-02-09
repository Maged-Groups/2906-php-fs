<pre>
<?php


function calculateSpeed($distance, $time)
{
    return $distance / $time;
}


$speed_1 = calculateSpeed(1000, 12);

$speed_2 = calculateSpeed(time: 12, distance: 1000);

var_dump($speed_1);

var_dump($speed_2);


function calculateInterest($principal, $time, $rate = 0.12)
{
    return $principal * $rate * $time / 100;
}


$client_1 = calculateInterest(100000, 0.12, 60);

$client_2 = calculateInterest(100000, time: 60, rate: 0.12);

$client_3 = calculateInterest(100000, 60);

$client_4 = calculateInterest( time: 60, principal: 100000);


var_dump($client_1);

var_dump($client_2);

var_dump($client_3);

var_dump($client_4);