<?php require_once 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <?php require_once 'styles.php' ?>
</head>

<body>

    <h1>Cards Page</h1>

    <?php

    $names = ['Soso', 'Lolo', 'Toto', 'Mickey', 'Mimi', 'Zizi', 'batot'];

    foreach ($names as $name):
        require 'card.php';
    endforeach;
    ?>


    <?php include_once 'social-links.php' ?>
</body>

</html>