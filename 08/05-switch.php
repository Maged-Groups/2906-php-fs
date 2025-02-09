<?php

$day_name = 'monday';
$msg = '';

/**
 * Display Happy Weekend for (Saturday and Friday).
 * For other weekdays, display Enjoy Your Work :).
 * Otherwise, dispaly Wrong Day Name!!!
 */

// week msg 

// if ($day_name == "saturday" || $day_name == "friday") {
//     echo "this day is $day_name, happy weekend";
// } elseif ($day_name == "sunday" || $day_name == "monday" || $day_name == "tuesday" || $day_name == "wednesday" || $day_name == "thursday") {
//     echo "this day is $day_name, enjoy your work :)";
// } else {
//     echo "Invalid day name";
// }

switch ($day_name) {
    case 'saturday':
    case 'friday':
        $msg = 'happy weekend';
        break;
    case 'sunday':
    case 'monday':
    case 'tuesday':
    case 'wednesday':
    case 'thursday':
        $msg = 'Enjoy Your Work :)';
        break;
    default:
        $msg = false;
}

echo ($msg == false)
    ? '<h3 style="color: tomato;">Wrong Day Name</h3>'
    : "The day is $day_name, $msg ";
