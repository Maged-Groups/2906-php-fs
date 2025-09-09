<?php

session_start();

require_once 'helpers\functions.php';

require_once 'config\database.php';

require_once 'config\app.php';

$db=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

