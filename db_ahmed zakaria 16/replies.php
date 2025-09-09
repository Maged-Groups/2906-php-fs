<?php
require_once 'load.php';
require_once 'config\queries.php';


foreach ($replies as $reply) {
    require 'components/replies/card.php';
    
     }