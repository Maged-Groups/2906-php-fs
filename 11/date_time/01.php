<pre>
<?php

// Get current timezone
$timezone = date_default_timezone_get();
var_dump($timezone);

// Get current hour
$hour = date('h');
var_dump($hour);

// Change the default timezone
date_default_timezone_set('Africa/Cairo');

$timezone = date_default_timezone_get();
var_dump($timezone);

// Get current hour
$hour = date('h');
var_dump($hour);
