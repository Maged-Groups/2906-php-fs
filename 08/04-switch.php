<?php


$day_name = 'Monday';
$short_name = '';

// Get the short day name



// Syntax
// switch () {}
// switch ( $variable ) {  // cases and actions}

switch ($day_name) {
    case 'Saturday':
        $short_name = 'Sat';
        break;
    case 'Sunday':
        $short_name = 'Sun';
        break;
    case 'Monday':
        $short_name = 'Mon';
        break;
    case 'Tuesday':
        $short_name = 'Tue';
        break;
    case 'Wednesday':
        $short_name = 'Wed';
        break;
    case 'Thursday':
        $short_name = 'Thu';
        break;
    case 'Friday':
        $short_name = 'Fri';
        break;
    default:
        $short_name = false;
}



$msg = $short_name === false
    ? 'Full day name is not valid!!!'
    : "The day name <span style='color: #950; '>$day_name</span> is written <span style='color: #950; '>$short_name</span> in short.";


echo "<h3>$msg</h3>";