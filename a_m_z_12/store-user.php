<pre>
<?php

// echo '<hr>GET';
// var_dump($_GET);
// echo '<hr>POST';
// var_dump($_POST);


echo '<hr>';
//var_dump($_POST['first_name']);
$first_name = ucfirst($_POST['first_name']);

if (preg_match("/^\w{5,}$/", $first_name)) {
    echo "<h2>✅ First name Valid</h2>";
} else {
    echo "<h2>❌ First name Invalid</h2>";
}
echo '<hr>';
//var_dump($_POST['last_name']);
$last_name =ucfirst( $_POST['last_name']);

if (preg_match("/^\w{5,}$/", $last_name)) {
    echo "<h2>✅ Last name Valid</h2>";
} else {
    echo "<h2>❌ Last name Invalid</h2>";
}
echo '<hr>';
//var_dump($_POST['email']);
$email = $_POST['email'];

if (preg_match("/^[\w._-]+@[\w.-]+\.[\w]{2,}$/", $email)) {
    echo "<h2>✅ E-mail Valid</h2>";
} else {
    echo "<h2>❌ E-mail Invalid</h2>";
}
echo '<hr>';
//var_dump($_POST['mobile']);
$mobile = $_POST['mobile'];

if (preg_match("/^(010|011|012|015)[0-9]{8}$/", $mobile)) {
    echo "<h2>✅ Mobile Valid</h2>";
} else {
    echo "<h2>❌ Mobile Invalid</h2>";
}
echo '<hr>';
//var_dump($_POST['username']);
$username = $_POST['username'];

if (preg_match("/^\w{5,}$/", $username)) {

    echo "<h2>✅ User name Valid</h2>";
} else {
    echo "<h2>❌ User name Invalid</h2>";
}
echo '<hr>';
//var_dump($_POST['password']);
$password = $_POST['password'];

if (preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,16}$/", $password)) {
    echo "<h2>✅ Password Valid</h2>";
} else {
    echo "<h2>❌ Password Invalid</h2>";
}
echo '<hr>';

$password_confirmation = $_POST['password_confirmation'];

if (!$password_confirmation=$password ) {
    echo "<h2>❌ Confirm password NOT Match</h2>";
}

