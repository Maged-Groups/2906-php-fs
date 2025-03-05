<pre>
<?php 
// required to enable session
session_start();

// $email = ' maged yaseen@gmail.com\n ';
$email = ' maged yaseen.gmail.com\n ';
var_dump($email);

// $sanitized_email =  filter_var($email, 517);
$email =  filter_var($email, FILTER_SANITIZE_EMAIL);
var_dump($email);

// $email =  filter_var($email, 274);
$email =  filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email);



