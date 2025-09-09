
<?php
require_once 'load.php';
require_once 'config\queries.php';


foreach ($posts as $post) {
    require 'components/posts/card.php';
    
     }