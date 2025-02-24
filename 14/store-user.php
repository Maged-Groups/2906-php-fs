<?php
session_start();

$errors = [];

// Validation

// $first_name = $_POST['first_name'];
// $last_name = $_POST['last_name'];
// $email = $_POST['email'];
// $mobile = $_POST['mobile'];
// $username = $_POST['username'];
// $password = $_POST['password'];
// $password_confirmation = $_POST['password_confirmation'];

// Not safe to extract received data(form submit OR API request)
extract($_POST);

// Validate first_name
if ($first_name === '')
    $errors[] = 'First name is required';
elseif (!preg_match("/^[A-Z][a-z_\s-]{2,14}$/", $first_name))
    // array_push($errors, 'First name is not valid');
    $errors[] = 'First name is not valid';


// Validate last_name
if ($last_name === '')
    $errors[] = 'Last name is required';
elseif (!preg_match("/^[A-Z][a-z_\s-]{2,14}$/", $last_name))
    // array_push($errors, 'First name is not valid');
    $errors[] = 'Last name is not valid';

// validate email
if ($email === '')
    $errors[] = 'Email is required';
else {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$email)
        $errors[] = 'Email is not valid';
}

// mobile

// Date of birth

// salary

// username

// password

// password confirmation
if ($password !== $password_confirmation)
    $errors[] = 'Passwords do not match';

// sleep(10);


if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;

    // Navigate to register page
    header('location: register.php');
} else
    header('location: /');


// $password = $_POST['password'];

// if (preg_match("/^[\w]$/", $password)) {
//     echo "<h2>Password Valid</h2>";
// } else {
//     echo "<h2>Password Invalid</h2>";
// }


