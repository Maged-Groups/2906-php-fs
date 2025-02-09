<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operators</title>
    <style>
        p {
            background-color: #112;
            padding: 10px;
            color: #6f3;
        }
    </style>

</head>

<body>

    <h1>String Operators</h1>


    <?php

    $firstname = 'Soso';

    $lastname = 'Duck';

    $age = 35;

    $city = 'Ducks City';

    $hoppies = 'swimming, travel, basket ball, and reading';

    // . operator
    $full_name = $firstname . ' ' . $lastname;

    $bio = "My name is $full_name";

    // .= operator
    $bio .= ", I am $age years old";

    $bio .= ", I love $hoppies";


    ?>

    <p><?= $bio; ?></p>





</body>

</html>