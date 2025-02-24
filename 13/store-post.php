<pre>
<?php
session_start();

$errors = [];

$old = $_POST;

extract($_POST);

var_dump($_POST);


// Validate title
if ($title === '') {
    $errors['title'] = 'Title is required';
} elseif (strlen($title) < 3 || strlen($title) > 30) {
    $errors['title'] = 'Title should be between 3 and 30 characters';
}

// Validate body

// Validate post_status_id

// Validate tags
if (!isset($tags)) {
    $errors['tags'] = 'Select at least one tag';
}

// Validate type

var_dump($errors);

if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $old;

    // Navigate to register page
    header('location: add-post.php');
} else
    header('location: /');




// if (preg_match("/^[\w]$/", $password)) {
//     echo "<h2>Password Valid</h2>";
// } else {
//     echo "<h2>Password Invalid</h2>";
// }


