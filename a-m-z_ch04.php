<?php

function greeting($name){
    echo "Hello $name";
}
echo 'greeting("ahmed");'.'<br>';
greeting("ahmed");

echo '<hr>';

function d_Age($name,$age){
    echo "$name is $age years old";
}

echo 'd_Age("Ahmed",44)'.'<br>';
d_Age('Ahmed',44);

echo '<hr>';

function addNumbers ($n1,$n2){
    echo $n1+$n2;
}
echo 'addNumbers(4,9);'.'<br>';
addNumbers(4,9);

echo '<hr>';

function multip ($n1,$n2){
echo $n1*$n2;
}
echo 'multip(34,66);'.'<br>';
multip(34,66);

echo '<hr>';

function getFullName($fn,$mn,$ln){
    echo "My Full Nmae is: $fn $mn $ln";
}
echo 'getFullName("Ahmed","Mohamed","Zakaria");'.'<br>';
getFullName('Ahmed','Mohamed','Zakaria');

echo '<hr>';

function introducePerson($name,$age,$city){

    echo "My name is $name, I am $age years old, and I live in $city.";

}
echo 'introducePerson("Ahmed",44,"Alexandria");'.'<br>';
introducePerson('Ahmed',44,'Alexandria');

echo '<hr>';
function applyDiscount ($price,$dis_perc){

    echo "Dicounted price = ".$price-($price*$dis_perc);

}
echo 'applyDiscount(500,25);'.'<br>';
applyDiscount(500,25);

echo '<hr>';

function rectangleArea($x,$y){
    echo "Rectangle area =".$x*$y."cm2";

}
echo 'rectangleArea(50,25);'.'<br>';
rectangleArea(50,25);

echo '<hr>';

function calculate ($n1,$n2){
echo "Addition =".$n1+$n2;
echo '<br>';
echo "Subtract =".$n1-$n2;
echo '<br>';
echo "Multiply =".$n1*$n2;
echo '<br>';
echo "Division =".$n1/$n2;
}
echo 'calculate(50,25);'.'<br>';
calculate(50,25);

echo '<hr>';

function convertToCelsius($F){
    echo 'Celsius degree ='.($F - 32) * 5/9;
}
echo 'convertToCelsius(230);'.'<br>';
convertToCelsius(230);

echo '<hr>';

function circleArea($radius){
    echo 'circle area (radius*radius)= '. 3.17 * ($radius*$radius);
    echo '<br>';
    echo 'circle area(pow(radius,2))= '. 3.17 * pow($radius,2);
}
echo 'circleArea(20);'.'<br>';
circleArea(20);
echo '<hr>';

function concatStrings ($str1,$str2){
    echo "concatStrings equal $str1$str2";
}
echo 'concatStrings("Maged","Yasen")'.'<br>';
concatStrings('Maged','Yasen');
echo '<hr>';

function convertCurrency($eg,$currency_N,$ex_rate){
    echo $eg.' EGP ='.($eg*$ex_rate) .' '. $currency_N;
}
echo 'convertCurrency(660,"Dollars",0.01923)'.'<br>';
convertCurrency(660,"Dollars",0.01923);
echo '<hr>';

function addPrefix($name,$prfx){

    echo $prfx.' '. $name;

}
echo 'addPrefix("Ahmed","Dr.");'.'<br>';
addPrefix('Ahmed','Dr.');
echo '<hr>';