<?php
class Post
  {

  const TABLE = 'posts';

  static function all(int $limit = 0)
    {
    // Get all posts
    $table = DB_PREFIX . static::TABLE;

    // Define the query
    $qry = "SELECT * FROM $table ORDER BY `id` DESC";

    if ($limit > 0)
      $qry .= " LIMIT $limit";

    // Execute the query and get the result set
    global $db;
    $result = $db->query($qry);

    // Fetch data from the result set

    $posts = $result->fetch_all(MYSQLI_ASSOC);


    return $posts;
    }

  static function show(int $id)
    {
    // Get all posts
    $table = DB_PREFIX . static::TABLE;

    // Define the query
    $qry = "SELECT * FROM $table WHERE `id` = '$id';";


    // Execute the query and get the result set
    global $db;
    $result = $db->query($qry);

    // Fetch data from the result set

    // $post = $result->fetch_array();
    // $post = $result->fetch_array(3);
    // $post = $result->fetch_array(MYSQLI_BOTH);
    // $post = $result->fetch_array(MYSQLI_ASSOC);

    // Associative array
    $post = $result->fetch_assoc();
    // dd($post['title']);

    return $post;
    }

  static function count()
    {
    $table = DB_PREFIX . static::TABLE;

    global $db;
    $qry = "SELECT COUNT(*) as total FROM $table";
    $result = $db->query($qry);
    $row = $result->fetch_assoc();
    return $row['total'];
    }
  }