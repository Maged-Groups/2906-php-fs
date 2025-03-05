<pre>
<?php
session_start();

require_once 'functions.php';

// user_id from the session storage after login
$user_id = 104;

$errors = [];

$old = $_POST;
// dd($_FILES);

extract($_POST);

// Photo
$image = $_FILES['image'] ?? [];
$images = $_FILES['images'] ?? [];

// Single Photo
$tmp_name = $image['tmp_name'];
$name = $image['name'];
$error = $image['error'];
$size = $image['size'];

if ($name == '') {
    $errors['image'] = 'Please upload an image';
} elseif ($error > 0) {
    $errors['image'] = 'File not accepted, try agin or choose another file.';
} elseif ($size > 2 * 1024 * 1024) {
    $errors['image'] = 'File size exceeded the limit(2MB)';
} else {
    $img = getimagesize($tmp_name);

    if (!$img) {
        $errors['image'] = 'Uploaded file is not an image';
    } else {
        $ext = str_replace('image/', '', $img['mime']);
        
        $file_name = $user_id . date('ymdhis') . mt_rand(11111, 99999) . '.' . $ext;
        
        if (!move_uploaded_file($tmp_name, "public/uploads/$file_name")) {
            $errors['image'] = 'File not uploaded';
        }
    }
}

// other images
if ($images['name'][0] == '') {
    $errors['images'][] = 'Uploaded at least one more image';
} elseif (count($images['name']) > 4) {
    $errors['images'][] = 'Uploaded max of 4 images';
} else {
    foreach ($images['error'] as $k => $img_err) {
        if ($img_err > 0) {
            $errors['images'][] = 'file ' . $images['name'][$k] . ' is not accepted';
        }

        $tmp_name = $images['tmp_name'][$k];
        $name = $images['name'][$k];
        $size = $images['size'][$k];

        if ($size > 2 * 1024 * 1024) {
            $errors['images'][] = "File $name size exceeded the limit(2MB)";
        } else {
            $img = getimagesize($tmp_name);

            if (!$img) {
                $errors['images'][] = "File $name is not an image";
            } else {
                $ext = str_replace('image/', '', $img['mime']);
                
                $file_name = $user_id . date('ymdhis') . mt_rand(11111, 99999) . '.' . $ext;
                
                if(!move_uploaded_file($tmp_name, "public/uploads/$file_name")) {
                    $errors['images'][] = "File $name not uploaded";
                }
            }
        }
    }
}

// dd($errors);


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

if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $old;

    // Navigate to register page
    header('location: add-post.php');
} else
    header('location: /');