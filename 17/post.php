<?php
require_once 'load.php';

$id = $_GET['id'] ?? null;

if (!$id) {
  // redirect to posts page
  header('Location: posts.php');
  exit;
  }

$post = show($id);

// Object
// $post = $result->fetch_object();

require_once 'components/posts/card.php';

// dd($post);
// dd($post->title);


