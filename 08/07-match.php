<?php


$day_name = 'mondayx';
// Get the short day name

$msg = match ($day_name) {
    'saturday', 'friday' => 'happy weekend',
    'sunday', 'monday', 'tuesday', 'wednesday', 'thursday' => 'Enjoy Your Work :)',
    default => false
};


echo ($msg == false)
    ? '<h3 style="color: tomato;">Wrong Day Name</h3>'
    : "The day is $day_name, $msg ";
