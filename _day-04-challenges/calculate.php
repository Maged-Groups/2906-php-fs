<?php

function calculate($no1 , $no2)  {

$Addition = $no1 + $no2 ;
$Subtraction = $no1 - $no2 ;
$Multiplication = $no1 * $no2 ;
$Division = $no1 / $no2 ;

echo "first Number is : $no1 . ";
echo '<br>';
echo "Second Number is : $no2 . ";
echo '<br>';
echo '<br>';

echo "Addition is : $Addition . ";
echo '<br>';
echo "Subtraction Is : $Subtraction ." ; 
echo '<br>';
echo "Multiplication Is : $Multiplication ." ;
echo '<br>';
if ($no2 <= 0) { 
    echo "Division: Division by zero is not allowed .";
} else {
    echo "Division Is : $Division .";
}
echo '<hr>';
}


calculate( 1000, 35 );
calculate( 356, 96 );
calculate( 10, 20 );
calculate( 325, 100 );