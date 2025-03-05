<?php
require_once 'load.php';

// Get all posts
$table = DB_PREFIX . 'posts';


// Define the query
$qry = "SELECT * FROM $table;";

// Execute the query and get the result set
$result = $db->query($qry);


// Fetch data from the result set

// get indexed arrays
// $posts = $result->fetch_all();
// $posts = $result->fetch_all(2); //default 2
$posts = $result->fetch_all(MYSQLI_ASSOC);
// $posts = $result->fetch_all(1);
// $posts = $result->fetch_all(MYSQLI_BOTH);
// $posts = $result->fetch_all(3);



foreach ($posts as $post) {
  require 'components/posts/card.php';
  }


