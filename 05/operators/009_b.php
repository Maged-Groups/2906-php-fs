<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmatic Operators</title>
    <style>
        p {
            background-color: #112;
            padding: 10px;
            color: #6f3;
        }
    </style>

</head>

<body>

    <h1>Arithmatic Operators</h1>


    <?php
    // Operators
    $x = 5;
    $y = 4;
    $t = 0;
    ?>

    <p>$x =<?= $x ?> </p>
    <p>$y =<?= $y ?> </p>
    <p>$t =<?= $y ?> </p>

    <p>Addition: $x + $y = <?= $x + $y ?></p>
    <p>Subtraction: $x - $y = <?= $x - $y ?></p>

    <p>Multiplication: $x * $y = <?= $x * $y ?></p>

    <p>Division: $x / $y = <?= $x / $y  ?></p> <!-- if $y = 0; will throw error-->
    <p>Remainder : $x % $y = <?= $x % $y ?></p> <!-- if $y = 0; will throw error-->

    <p>fdiv($x , $y) = <?= fdiv($x, $t) ?></p>
    <p>fmod($x % $y) = <?= fmod($x, $t) ?></p>

    <p>Exponentiation: $x ** $y = <?= $x ** $y ?></p>




</body>

</html>