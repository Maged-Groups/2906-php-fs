<?php


$day_name = 'Fridayx';
// Get the short day name

$short_name = match ($day_name) {
    'Saturday' => 'Sat',
    'Sunday' => 'Sun',
    'Monday' => 'Mon',
    'Tuesday' => 'Tue',
    'Wednesday' => 'Wed',
    'Thursday' => 'Thu',
    'Friday' => 'Fri',
    default => false
};



$msg = $short_name === false
    ? 'Full day name is not valid!!!'
    : "The day name <span style='color: #950; '>$day_name</span> is written <span style='color: #950; '>$short_name</span> in short.";


echo "<h3>$msg</h3>";