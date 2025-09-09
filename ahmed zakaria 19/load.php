<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once 'vendor\autoload.php';
require_once 'helpers\functions.php';

require_once 'config\database.php';

require_once 'config\app.php';



App\Models\Model::connect();


