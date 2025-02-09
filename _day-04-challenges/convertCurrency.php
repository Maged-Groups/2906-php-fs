<?php
function convertCurrency($amountInEGP, $conversionRate, $currency) {
    $convertedAmount = $amountInEGP * $conversionRate;

    if ($amountInEGP <= 0 || $conversionRate <= 0) {
        echo "Amount and conversion rate must be positive numbers.";
        echo '<hr>';
    }else {
        echo "The amount $amountInEGP EGP is equivalent to $convertedAmount $currency.";
        echo '<hr>';        
    }
    
}
convertCurrency(1000, 0.05026, "USD");
convertCurrency(1000, -0.026, "USD");

