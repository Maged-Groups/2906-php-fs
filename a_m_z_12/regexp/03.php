<?php
## 5. Validate an email address format.
$pattern = "/^[\w._-]+@[\w.-]+\.[\w]{2,}$/";

$emails = ['test.22-may_you@example33.com', 'user@domain', 'valid.email@site.net', 'wrong@com'];
// Valid  -  invalid - Valid  - invalid
foreach ($emails as $email) {
    echo "$email ➜ " . (preg_match($pattern, $email) ? "Valid" : "Invalid") . "<br>";
}