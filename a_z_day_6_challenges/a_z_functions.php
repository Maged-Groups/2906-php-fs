<?php
function add_numbers($n1, $n2)
{
    return $n1 + $n2;
}
function multiply($n1, $n2, $n3)
{
    return $n1 * $n2 * $n3;
}
function adivide_numbers($n1, $n2)
{
    return $n1 / $n2;
}
function rect_calc_area($width, $height)
{
    return $width * $height;
}
function squar_calc_area($side)
{
    return $side * $side;
}
function cube($number)
{
    return pow($number, 3);
}
function convertToMinutes($hours)
{
    return $hours * 60;
}
function convertToSecon($days)
{
    return $days * 86400;
}
function rect_calculatePerimeter($width, $height)
{
    return ($width + $height) * 2;
}
function average($a, $b, $c)
{
    return ($a + $b + $c) / 3;
}
function convertTemperature($celsius)
{
    return ($celsius * 9 / 5) + 32;
}
function calculateSpeed($distance, $time)
{
    return $distance * $time;
}
function hypotenuse($sideA, $sideB)
{
    return sqrt($sideA ^ 2 + $sideB ^ 2);
}
function power($base, $exponent)
{
    return pow($base, $exponent);
}
function modulus($a, $b)
{
    return $a % $b;
}
function metric_calculateBMI($weight_KG, $height_Meter)
{
    return $weight_KG / $height_Meter ^ 2;
}
function convertToKilometers($meters)
{
    return $meters / 1000;
}
function calculateInterest($principal, $rate_perYear_100, $time)
{
    return $principal * $rate_perYear_100 * $time;
}
function compoundInterest($principal, $rate_perYear_100,$n_t_year, $time) {
    return $principal* (1+$rate_perYear_100/$n_t_year)^ ($n_t_year*$time);
}
function findPercentage($value, $total) {
    return $value / $total *100;
}