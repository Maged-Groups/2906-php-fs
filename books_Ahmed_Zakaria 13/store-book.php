<?php

session_start();
//   var_dump( $_SESSION);
$errors = [];
$selectedLanguages = isset($_POST['languages']) ? $_POST['languages'] : [];
$old = $_POST;
 var_dump($_POST);
// echo"<hr/>";
extract($_POST);

// var_dump($old);

// Validate Title
if ($title === '')
    $errors['title'] = 'Title is required';
elseif (!preg_match("/^[A-Z][a-z_\s-]{2,14}$/", $title))

    $errors['title'] = 'Title is not valid';


// Validate author_name
if ($author_name === '')
    $errors['author_name'] = 'Author name is required';
elseif (!preg_match("/^([A-Z][a-z_\s-]{2,14} ){2}([A-Z][a-z_\s-]{2,14})$/", $author_name))

    $errors['author_name'] = 'Author name is not valid';

// validate book_year
if ($book_year === '')
    $errors['book_year'] = 'Book year is required';
elseif (!preg_match("/^[\d]{4}$/", $book_year))
    $errors['book_year'] = 'Book year is not valid';

// Validate languages
if (!isset($languages)) {
    $errors['languages'] = 'Select at least one language';
}

// Validate languages
if (!isset($type_id)) {
    $errors['type_id'] = 'Select at least one type';
}

// echo"<hr/>";
// var_dump($errors);
if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $old;
    $_SESSION['languages'] =$selectedLanguages;

    // Navigate to add-book page
     header('location:add-book.php');
} else{
    echo "Book added successfully";
header('location:book.php');}

