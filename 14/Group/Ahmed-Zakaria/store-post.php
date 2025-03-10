<pre>
<?php
session_start();

require_once 'functions.php';

// user_id from the session storage after login
$user_id = 107;
$post_id = 2;

$errors = [];
$imgs = [];

$old = $_POST;
// echo '$_FILES';
// dd($_FILES);

extract($_POST);

// Photo
$image = $_FILES['main_image'];
$tmp_name = $image['tmp_name'];
$img_name = $image['name'];
$img_type = $image['type'];
$img_size = $image['size'];

// dd(getimagesize($tmp_name));

$images = $_FILES['images'];


// Validate title
if ($title === '') {
    $errors['title'] = 'Title is required';
} elseif (strlen($title) < 3 || strlen($title) > 30) {
    $errors['title'] = 'Title should be between 3 and 30 characters';
}

// Validate body
if ($body === '') {
    $errors['body'] = 'body is required';
} elseif (strlen($body) < 10 || strlen($body) > 300) {
    $errors['body'] = 'body should be between 10 and 300 characters';
}

// Validate post_status_id
if (!isset($post_status_id)) {
    $errors['post_status_id'] = 'Post Status is required';
} elseif (!in_array($post_status_id, [1, 2, 3, 4])) {
    $errors['post_status_id'] = 'Post Status not accepted';
}

// Validate tags
if (!isset($tags)) {
    $errors['tags'] = 'Select at least one tag';
} else {

    $match = array_intersect(['important', 'social', 'public', 'kids'], $tags);
    if (empty($match)) {
        $errors['tags'] = 'Selected tag is not in our database!!!';
    }
}

// Validate type
if ($type === '') {
    $errors['type'] = 'Select post type';
} elseif (!in_array($type, [1, 2, 3, 4])) {
    $errors['type'] = 'Selected post type is not valid!!!';
}

// Validate image
if ($img_name === '') {
    $errors['main_image'] = 'Select Main Post Image';
} elseif (!in_array($img_type, ['image/jpeg', 'image/png', 'image/bmp'])) {
    $errors['main_image'] = 'Choosed post image is not valid!!!';
} elseif ((!$img_size > 1000000)) {
    $errors['main_image'] = 'Choosed post image is bigger than 1000 kb !!!';
} else {
    createFolder($user_id);
    $ext = get_ext($img_name);
    $file_name = $user_id . '-' . $post_id . '-' . date('ymdhis') . mt_rand(11111, 99999) . '.' . $ext;
    move_uploaded_file($tmp_name, "public/uploads/" . $user_id . '/' . $file_name);
    $_SESSION['main_image'] = "public/uploads/" . $user_id . '/' . $file_name;
}

// Validate images
if ($images['name'][0] === '') {
    $errors['images'] = 'Select at least 1 Post mini_images';
} else {

    foreach ($images['type'] as $i => $image_type) {
        if (!in_array($image_type, ['image/jpeg', 'image/png', 'image/bmp'])) {
            $errors['images'] = 'Image NO.' . ($i + 1) . ' of Choosed Post Images is not valid!!!';
        }
    }
    foreach ($images['size'] as $i => $image_size) {
        if (!$image_size > 1000000) {
            $errors['images'] = 'Image NO.' . ($i + 1) . ' of Choosed Post Images is bigger than 1000 kb !!!';
        }

    }
}

if (!isset($errors['images'])) {
    foreach ($images['tmp_name'] as $i => $image_tname) {

        createFolder($user_id);
        $i_ext = get_ext($images['name'][$i]);
        $i_name = $user_id . '-' . $post_id . '-mini' . date('ymdhis') . mt_rand(11111, 99999) . '.' . $i_ext;
        move_uploaded_file($image_tname, "public/uploads/" . $user_id . '/' . $i_name);


        // array_push($imgs, "public/uploads/$user_id/$i_name");
        $imgs[] = "public/uploads/$user_id/$i_name";

    }
}

$_SESSION['images'] = $imgs;

// dd($imgs);
echo '$errors';
// dump($errors);
echo '$old';
// dump($old);
echo '$session';
// dump($_SESSION);

$_SESSION['old'] = $old;

if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;


    //Navigate to register page
    header('location: /');
} else

    header('location: posts.php');