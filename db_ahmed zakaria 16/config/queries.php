<?php
require_once 'load.php';

$posts_table = DB_PREFIX . 'posts';

$comments_table = DB_PREFIX . 'comments';

$post_statuses_table = DB_PREFIX . 'post_statuses';

$reaction_types_table = DB_PREFIX . 'reaction_types';

$replies_table = DB_PREFIX . 'replies';

$users_table = DB_PREFIX . 'users';


$posts_qry = "SELECT * FROM $posts_table;";
$posts_result = $db->query($posts_qry);
$posts = $posts_result->fetch_all(MYSQLI_ASSOC);

$comments_qry = "SELECT * FROM $comments_table;";
$comments_result = $db->query($comments_qry);
$comments = $comments_result->fetch_all(MYSQLI_ASSOC);

$post_statuses_qry = "SELECT * FROM $post_statuses_table;";
$post_statuses_result = $db->query($post_statuses_qry);
$post_statuses = $post_statuses_result->fetch_all(MYSQLI_ASSOC);

$reaction_types_qry = "SELECT * FROM $reaction_types_table;";
$reaction_types_result = $db->query($reaction_types_qry);
$reaction_types = $reaction_types_result->fetch_all(MYSQLI_ASSOC);

$replies_qry = "SELECT * FROM $replies_table;";
$replies_result = $db->query($replies_qry);
$replies = $replies_result->fetch_all(MYSQLI_ASSOC);

$users_qry = "SELECT * FROM $users_table;";
$users_result = $db->query($users_qry);
$users = $users_result->fetch_all(MYSQLI_ASSOC);