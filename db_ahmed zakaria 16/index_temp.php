<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .links {
            padding-top: 100px;
            /* border: solid red 2px; */
            display: flex;
            gap: 10px;
            justify-content: space-between;

            justify-items: center;
            align-items: center;
            flex-wrap:wrap;
        }

        a {
            color: darkblue;
            text-decoration: none;
            border: solid blue 2px;
            background-color: cyan;
            text-align: center;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="links">
       
        <a href="POSTS.php">POSTS</a>
        <a href="USERS.php">USERS</a>
        <a href="POST_STATUSES.php">POST-STATUSES</a>
        <a href="REACTION_TYPES.php">REACTION-TYPES</a>
        <a href="REPLIES.php">REPLIES</a>
        <a href="COMMENTS.php">COMMENTS</a>
    </div>

</body>

</html>

<?php
require_once 'load.php';


