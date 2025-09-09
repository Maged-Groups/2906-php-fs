<?php
## 12. Validate a string that contains only letters, numbers, and spaces.


$pattern = "/^[A-Z\d ]+$/i";

$strings = ['Hello PHP', '12345', 'php@web', 'ValidName 2024'];
//  valid - valid - invalid - valid

foreach ($strings as $string) {
  echo "$string ➜ " . (preg_match($pattern, $string) ? "Valid" : "Invalid") . "<br>";
}
