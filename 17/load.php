<?php
session_start();

// Load configurations
require_once 'config/database.php';

require_once 'config/app.php';

// load helpers

require_once 'helpers/functions.php';


// Load models
$models = ['Post', 'Comment', 'Reply', 'PostStatus', 'Reaction', 'ReactionType', 'User'];

foreach ($models as $model) {
  require_once "models/$model.php";
  }



//  Define the database connection
$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);