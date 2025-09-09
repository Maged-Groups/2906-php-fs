<?php
require_once 'load.php';
require_once 'config\queries.php';


foreach ($post_statuses as $post_status) {
    require 'components/post_statuses/card.php';
    
     }