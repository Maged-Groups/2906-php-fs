<?php
function circleArea($radius) {
    if ($radius <= 0) {
        echo "The radius must be a positive number.";
    }
    $area = 3.17 * pow($radius, 2);
    echo "The area of the circle with radius $radius is: $area";
}

circleArea(5);
