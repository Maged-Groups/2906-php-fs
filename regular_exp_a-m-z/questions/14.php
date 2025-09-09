<?php
## 14. Ensure a given string is a valid credit card number (16 digits).


$pattern = "/^[\d]{16}$|^([\d]{4} ){3}[\d]{4}$|^([\d]{4}-){3}[\d]{4}$/";

$cards = ['4111111111111111', '1234 5678 9012 3456', '1234-5678-9012-3456', '4111abcd1234', '5555555 5555 54444'];
// valid - valid - valid - invalid - invalid

foreach ($cards as $card) {
  echo "$card ➜ " . (preg_match($pattern, $card) ? "Valid" : "Invalid") . "<br>";
}
