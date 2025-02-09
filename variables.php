<?php 


// Define a new variable named total with initial value equals 0
$total = 0;

// Define a new variable named companyName with initial value equals The Company
$companyName = 'The Company';

// change the value of the total by adding 100 to it
$total = $total + 100;

// Change the total to be 500
$total = 500;

echo $total;

echo '<hr />';

echo $total;

echo '<hr />';

echo $companyName;

// Variable name rules
// Accepted
$userage = 33; // not recommended -> not readable

$USERAGE = 33; // not recommended -> not readable

$USER_AGE = 33; // not recommended -> used in PHP constants

$عمر_المستخدم = 33; // not recommended


$UserAge = 33; // PascalCase -> not recommended -> used in PHP Class Name

$age = 33;

$userAge = 33; // camelCase -> Best practices

$user_age = 33; // snake_case -> Best practices



// Not Accepted
// $user-age = 33; // Kebab-case
// $user age = 33; 

echo '<hr />';

$username = 'Soso';

// Output string with variable
echo 'The user age is ' . $userage;

echo '<hr />';

echo $username . ' is ' . $userage . ' years old';

echo '<hr />';

echo "$username is $userage years old";

echo '<hr />';

echo '$username is $userage years old';


