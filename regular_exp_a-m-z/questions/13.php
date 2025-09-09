<?php
## 13. Check if a given input is a valid URL.


$pattern = "/^[https:\/\/]|[www.][.]/";

$urls = ['https://mwjb.net', 'https://mwjb.net/page/1', 'www.google.com', 'http://mwjb.net', 'invalid-url'];
//  valid - valid - valid - valid - invalid

foreach ($urls as $url) {
  echo "$url ➜ " . (preg_match($pattern, $url) ? "Valid" : "Invalid") . "<br>";
}
