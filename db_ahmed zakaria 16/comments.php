<?php
require_once 'load.php';
require_once 'config\queries.php';


foreach ($comments as $comment) {
    require 'components/comments/card.php';
    
     }