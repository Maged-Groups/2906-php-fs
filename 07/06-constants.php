<h1>Constants</h1>

<?php

// Define constants #method 1
const APP_NAME = 'The Company';
const APP_VERSION = '1.0.1';
const APP_YEAR = 2025;
const ROLES = ['admin', 'guest', 'moderator'];


// Define constants #method 2
define('DB_NAME', 'posts_db');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DRIVER', 'mysql');

const root = 'xyz';

// Use the constant

echo APP_NAME;
echo '<hr />';

echo DB_NAME;
echo '<hr />';

function my_fnc()
{
    define('AUTHOR_NAME', 'Maged Yaseen');
}


function welcome(string $name)
{
    echo "<h5>Welcome $name</h5>";
}

// Ternary Operator
// logical_test ? 'Action/value if TRUE' : 'Action/value if FALSE';

defined('AUTHOR_NAME') ? welcome(AUTHOR_NAME) : welcome('Guest');


my_fnc();


defined('AUTHOR_NAME') ? welcome(AUTHOR_NAME) : welcome('Guest');


echo '<hr />';

$age = 12;

echo $age >= 15 ? 'You can travel alone' : 'You cannot travel alone!';