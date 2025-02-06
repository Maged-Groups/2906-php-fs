<?php 

$status = 'Pending';

$color = '';

// for next cases, the color should be red => Canclled, Refunded, Complain
// for next cases, the color should be blue => Pending, On Hold, Postpond
// for next cases, the color should be green => Delivered, Shipped, Reviewed
// handle not matched status



switch ($status) {
    case 'Cancelled':
    case 'Refunded':
    case 'Complain':
        $color = 'red';
        break;
    
    case 'Pending':
    case 'On Hold':
    case 'Postpond':
        $color = 'blue';
        break;

    case 'Delivered':
    case 'Shipped':
    case 'Reviewed':
        $color = 'green';
        break;

    default:
        $color = 'gray'; 
}

echo $color;

