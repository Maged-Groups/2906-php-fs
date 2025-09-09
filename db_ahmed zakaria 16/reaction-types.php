<?php
require_once 'load.php';
require_once 'config\queries.php';


foreach ($reaction_types as $reaction_type) {
    require 'components/reaction_types/card.php';
    
     }