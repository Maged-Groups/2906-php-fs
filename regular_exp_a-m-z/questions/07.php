<?php
## 7. Check if a given string is a valid IPv4 address.
## is an IP in the form "x1.x2.x3.x4" where 0 <= xi <= 255 and xi cannot contain leading zeros

//$pattern = '/^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
$pattern = "/^[0-9]{1,3}+\.+[0-9]{1,3}+\.+[0-9]{1,3}+\.+[0-9]{1,3}$/";

$ips = ['192.168.1.01', '999.999.999.999', '256.256.256.2560', '8.8.8'];
// Valid  - Valid  - invalid - invalid

foreach ($ips as $ip) {
  echo "$ip ➜ " . (preg_match($pattern, $ip) ? "Valid" : "Invalid") . "<br>";
}
