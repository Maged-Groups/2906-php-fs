<style>
    .parent {
        display: flex;
        perspective: 1000px;
        padding: 20px 50px;
        flex-wrap: wrap;
        border: solid;
        width: 320px;

    }
</style>
<?php
require_once 'load.php';


$users = User::all();

foreach ($users as $user) {
     "<div class='parent'>".
    require 'components/users/card.php';"
  </div>";
}