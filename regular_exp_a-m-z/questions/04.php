<?php
## 4. Check if a string contains only alphabetic characters (both uppercase and lowercase).


$pattern = "/^[A-Z]+$/i";

$words = ['Hello', 'Welcome', 'Hello123', 'Good_day'];
// Valid  -  Valid  - invalid - invalid

foreach ($words as $word) {
  echo "$word ➜ " . (preg_match($pattern, $word) ? "Valid" : "Invalid") . "<br>";
}
