<?php
## 3. Validate a mobile number format: 01xxxxxxxxx (11 digits, starting with 01).
$pattern = "/^01[0125]\d{8}$/";
$numbers = ['01234567890', '01987654321', '02123456789', '0123456789', '01121800752'];
//  Valid - invalid - invalid - invalid - Valid
foreach ($numbers as $number) {
  echo "$number ➜ " . (preg_match($pattern, $number) ? "Valid" : "Invalid") . "<br>";
}