<?php
function dd($k, $v)
{
  $v = is_string($v) ? $v : ($v ? 'true' : 'false');

  echo "<p>$k ➜ <small>$v</small></p>";
}
function title($title)
{
  echo "<h5>$title</h5>";
}

function note($note)
{
  echo "<h6>$note</h6>";
}

// $pattern = "/[0-9A-Za-z`~!@#$%^&*\(\)_+=\]\}\[\{\'\";:\\|\/\?.>,<-]/";
// $pattern = "/[A-Z0-9\w]/i";
$pattern = "/[A-Z\d\W]/i";

$txt_1 = 'Ad3';
$txt_2 = '0Ad';
$txt_3 = 's3Ps';
$txt_4 = '00SSrr';
$txt_5 = 's';
$txt_6 = '#$';

$res_1 = preg_match($pattern, $txt_1);

$res_2 = preg_match($pattern, $txt_2);

$res_3 = preg_match($pattern, $txt_3);

$res_4 = preg_match($pattern, $txt_4);

$res_5 = preg_match($pattern, $txt_5);

$res_6 = preg_match($pattern, $txt_6);


title($pattern);

note("String should contain any number, special charachter, uppercase letter, or lowercase letter");

dd($txt_1, $res_1);

dd($txt_2, $res_2);

dd($txt_3, $res_3);

dd($txt_4, $res_4);

dd($txt_5, $res_5);

dd($txt_6, $res_6);
