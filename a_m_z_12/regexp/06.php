<?php
## 8. Validate a date in YYYY-MM-DD format.
// $pattern = "/^(18|19|20)[0-9]{2}-(0[1-9]{1}|1[0-2]{1})-(0[1-9]{1}|[1-2]{1}[0-9]{1}|3[0-1]{1})$/";
$pattern="/^(1[0-9]{3}|20[0-9]{2})-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[0-1])$/";

$dates = ['2025-02-16', '99-12-31', '2023-13-40', '2024-05-07'];
// valid -  invalid -  Invalid -  valid
foreach ($dates as $date) {
  echo "$date ➜ " . (preg_match($pattern, $date) ? "Valid" : "Invalid") . "<br>";
}