<?php

function applyDiscount($originalPrice , $discount)  {

$priceAfterDiscount = $originalPrice - $originalPrice * ($discount /100);
echo "original price is : $originalPrice . ";
echo '<br>';
echo "Discount Is : $discount ." ; 
echo '<br>';
echo "Price After Discount Is : $priceAfterDiscount ." ;
}


applyDiscount( 1000, 35 );