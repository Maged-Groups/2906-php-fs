<?php
require_once 'load.php';
require_once 'config\queries.php';


foreach ($users as $user) {
    require 'components/users/card.php';
    
     }