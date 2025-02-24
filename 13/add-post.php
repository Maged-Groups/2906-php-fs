<?php
session_start();
var_dump($_SESSION);

$errors = $_SESSION['errors'] ?? [];
$old = $_SESSION['old'] ?? [];

var_dump($errors);
var_dump($old);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>

    <style>
        .errors {
            color: tomato;
        }
    </style>

</head>

<body>

    <form method="post" action="store-post.php">
        <!-- Title -->
        <div>
            <label>Title</label>
            <input type="text" name="title" value="<?= @$old['title']; ?>" placeholder="3 - 30 characters">
            <p class="errors"><?= @$errors['title']; ?></p>
        </div>

        <!-- body -->
        <div>
            <label>Body</label>
            <textarea name="body"></textarea>
        </div>

        <!-- Status -->
        <div>
            <fieldset>
                <legend>Status</legend>

                <input type="radio" name="post_status_id" id="pending" value="1">
                <label for="pending">Pending</label>

                <input type="radio" name="post_status_id" id="published" value="2">
                <label for="published">Published</label>

                <input type="radio" name="post_status_id" id="archived" value="3">
                <label for="archived">Archived</label>
            </fieldset>
        </div>

        <!-- tags -->
        <div>
            <fieldset>
                <legend>Tags</legend>
                <input value="important" type="checkbox" name="tags[]" id="important">
                <label for="important">Important</label>

                <input value="social" type="checkbox" name="tags[]" id="social">
                <label for="social">Social</label>

                <input value="public" type="checkbox" name="tags[]" id="public">
                <label for="public">Public</label>

                <input value="kids" type="checkbox" name="tags[]" id="kids">
                <label for="kids">Kids</label>
            </fieldset>
        </div>

        <!-- Type -->
        <div>
            <label for="type">Type</label>
            <select name="type" id="type">
                <option value="">-Select a post type-</option>
                <option value="1">News</option>
                <option value="2">Art</option>
                <option value="3">Cars</option>
                <option value="4">Sports</option>
            </select>
        </div>

        <!-- Thumbnail -->
        <div>
            <label for="image">Post Image</label>
            <input type="file" name="image" id="image">
        </div>

        <div>
            <button type="Submit">Submit</button>
        </div>


    </form>

</body>

</html>