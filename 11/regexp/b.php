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

$pattern = "/PHP/i";

$txt_1 = 'PHP';
$txt_2 = 'Php';
$txt_3 = 'pHp';
$txt_4 = 'php';
$txt_5 = 'I Love PHP';
$txt_6 = 'I Love Php';
$txt_7 = 'I Love coding';

$res_1 = preg_match($pattern, $txt_1);

$res_2 = preg_match($pattern, $txt_2);

$res_3 = preg_match($pattern, $txt_3);

$res_4 = preg_match($pattern, $txt_4);

$res_5 = preg_match($pattern, $txt_5);

$res_6 = preg_match($pattern, $txt_6);

$res_7 = preg_match($pattern, $txt_7);

title($pattern);

note("Find the word (PHP) in the sentence, (i) Case insensitive");

dd($txt_1, $res_1);

dd($txt_2, $res_2);

dd($txt_3, $res_3);

dd($txt_4, $res_4);

dd($txt_5, $res_5);

dd($txt_6, $res_6);

dd($txt_7, $res_7);
