<?php
## 2. Validate that the name contains only Arabic characters.


$pattern = '/^[\p{Arabic}]+$/u';

$names = ['محمد', 'أحمد', 'يوسف', 'Ali', 'كريم123'];
// Valid - Valid -  Valid  - Invalid - Invalid

foreach ($names as $name) {
  echo "$name ➜ " . (preg_match($pattern, $name) ? "Valid" : "Invalid") . "<br>";
}
