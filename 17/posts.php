<?php
require_once 'load.php';

$posts = Post::all();

foreach ($posts as $post) {
  require 'components/posts/card.php';
  }


