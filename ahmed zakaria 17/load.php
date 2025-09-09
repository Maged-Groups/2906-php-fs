<?php

session_start();
require_once 'vendor/autoload.php';
require_once 'helpers\functions.php';

require_once 'config\database.php';

require_once 'config\app.php';


// require_once 'models/Model.php';
// require_once 'models/Post.php';
// require_once 'models/User.php';
// require_once 'models/Replay.php';
// require_once 'models/Comment.php';
// require_once 'models/Reaction.php';


$db=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

