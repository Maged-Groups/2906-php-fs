<?php
## 5. Validate an email address format.


$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

$emails = ['test@example.com', 'user@domain', 'valid.email@site.net', 'wrong@com'];
// Valid  -  invalid - Valid  - invalid

foreach ($emails as $email) {
  echo "$email ➜ " . (preg_match($pattern, $email) ? "Valid" : "Invalid") . "<br>";
}
