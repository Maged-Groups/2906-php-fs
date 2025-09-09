<?php
##
/* 6. Ensure a password contains at least:
  # one uppercase letter
  # one lowercase letter
  # one digit
  # one symbol
  # is between 8 and 16 characters long.
*/


$pattern = "/[A-Z\d\W]{8,16}$/i";

$passwords = ['Password1', 'p@ssW0rd', 'PASSWORD123', 'Pass12', 'P@ssw0rd'];
// invalid - Valid  - invalid  - invalid - Valid

foreach ($passwords as $password) {
  echo "$password ➜ " . (preg_match($pattern, $password) ? "Valid" : "Invalid") . "<br>";
}
