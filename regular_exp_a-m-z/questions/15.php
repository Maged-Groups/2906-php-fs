<?php
## 15. Validate a ZIP code (5-digit or 5+4 format).


$pattern = "/^[\d]{5}$|^[\d]{5}-[\d]{4}$/";

$zips = ['12345', '12345-6789', '1234', 'ABCDE'];
// valid - valid - invalid - invalid

foreach ($zips as $zip) {
  echo "$zip ➜ " . (preg_match($pattern, $zip) ? "Valid" : "Invalid") . "<br>";
}
