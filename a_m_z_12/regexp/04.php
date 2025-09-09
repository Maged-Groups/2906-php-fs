<?php
## 8. Validate a date in YYYY-MM-DD format.
// $pattern = '/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/';
$pattern = '/^(19[\d]{2}|20[\d]{2})-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/';

$dates = ['2025-02-16', '99-12-301', '2023-13-40', '2024-05-07'];
// valid -  invalid -  Invalid -  valid

foreach ($dates as $date) {
  echo "$date ➜ " . (preg_match($pattern, $date) ? "Valid" : "Invalid") . "<br>";
}