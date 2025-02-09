<?php

function getDiscountedPrice($originalPrice , $discount )  {

$priceAfterDiscount = $originalPrice - $originalPrice * ($discount / 100);
echo "the original price is : $originalPrice . ";
echo '<br>';
echo "discount Is : $discount %." ; 
echo '<br>';
echo "price after discount is  : $priceAfterDiscount ." ; 
echo '<hr>';
}


getDiscountedPrice( 1000 , 50 );
getDiscountedPrice( 500 , 30 );
getDiscountedPrice( 200 , 20 );
getDiscountedPrice( 100 , 10 );