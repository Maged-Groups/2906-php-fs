<?php

function convertToCelsius($Fahrenheit )  {

$Celsius = ($Fahrenheit - 32 )* 5 /9 ;
echo "Temp with Fahrenheit is : $Fahrenheit . ";
echo '<br>';
echo "Temp with Is : $Celsius ." ; 
echo '<hr>';
}


convertToCelsius( 1000 );
convertToCelsius( 500 );
convertToCelsius( 200 );
convertToCelsius( 100 );