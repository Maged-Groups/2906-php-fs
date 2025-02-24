<pre>
<?php

echo '<hr>GET';
var_dump($_GET);
echo '<hr>POST';
var_dump($_POST);


echo '<hr>';
var_dump($_POST['email']);
$password = $_POST['password'];

if (preg_match("/^[\w]$/", $password)) {
    echo "<h2>Password Valid</h2>";
} else {
    echo "<h2>Password Invalid</h2>";
}


