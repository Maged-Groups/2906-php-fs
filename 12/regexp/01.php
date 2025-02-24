<?php
## 1. Validate that the first name should start with an uppercase letter and have a range of 3 to 15 letters only.

$pattern = "/^[A-Z][A-Za-z]{2,14}$/";

$names = ['John', 'Michael', 'aLex', 'J', 'MarkusTheGreat', 'Liduuuuuuuuuuuji'];

// Valid - Valid - Invalid - Invalid - Invalid - Invalid
foreach ($names as $name) {
    echo "$name ➜ " . (preg_match($pattern, $name) ? "Valid" : "Invalid") . "<br>";
}
