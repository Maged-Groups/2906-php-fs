<?php
function dd($k, $v)
{
  $v = is_string($v) ? $v : ($v ? 'true' : 'false');

  $v = htmlspecialchars($v);
  $k = htmlspecialchars($k);

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

// $pattern = "/^[0-9A-Za-z`~!@#\$%^&*\(\)_+=\]\}\[\{\'\";:\\|\/\?.\>,\<-]{2}$/";
// $pattern = "/^[0-9A-Z\W]{2}$/i";
$pattern = "/^[A-Z\d\W]{2}$/i";

$txt_1 = 'Ad3';
$txt_2 = '0Ad';
$txt_3 = 's3Ps';
$txt_4 = '00SSrr';
$txt_5 = 's';
$txt_6 = '#$';
$txt_7 = 'd3';

$res_1 = preg_match($pattern, $txt_1);

$res_2 = preg_match($pattern, $txt_2);

$res_3 = preg_match($pattern, $txt_3);

$res_4 = preg_match($pattern, $txt_4);

$res_5 = preg_match($pattern, $txt_5);

$res_6 = preg_match($pattern, $txt_6);

$res_7 = preg_match($pattern, $txt_7);


title($pattern);

note("String should contain exactly 2 of these (numbers, special charachters, uppercase letters, or lowercase letters)");

dd($txt_1, $res_1);

dd($txt_2, $res_2);

dd($txt_3, $res_3);

dd($txt_4, $res_4);

dd($txt_5, $res_5);

dd($txt_6, $res_6);

dd($txt_7, $res_7);
