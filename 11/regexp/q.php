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

// $pattern = "/^[0-9A-Za-z`~!@#\$%^&*\(\)_+=\]\}\[\{\'\";:\\|\/\?.\>,\<-]{2,10}$/";
$pattern = "/^X-/";

$txt_1 = 'X-';
$txt_2 = 'XY';
$txt_3 = 'x-';
$txt_4 = 'X-abc';
$txt_5 = 'X-232';
$txt_6 = '-X23kh3';
$txt_7 = 'X---';

$res_1 = preg_match($pattern, $txt_1);

$res_2 = preg_match($pattern, $txt_2);

$res_3 = preg_match($pattern, $txt_3);

$res_4 = preg_match($pattern, $txt_4);

$res_5 = preg_match($pattern, $txt_5);

$res_6 = preg_match($pattern, $txt_6);

$res_7 = preg_match($pattern, $txt_7);


title($pattern);

note("Code should start with X-");

dd($txt_1, $res_1);

dd($txt_2, $res_2);

dd($txt_3, $res_3);

dd($txt_4, $res_4);

dd($txt_5, $res_5);

dd($txt_6, $res_6);

dd($txt_7, $res_7);
