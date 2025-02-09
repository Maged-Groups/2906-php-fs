<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operators</title>
    <style>
        pre {
            background-color: #112;
            color: #6f3;
            padding: 10px;
            overflow: auto;
        }

        h6 {
            color: #f00;
        }

        p {
            background-color: #eef;
            padding: 15px;
        }

        span {
            color: #561;
        }
    </style>

</head>

<body>

    <h1>Array Operators</h1>


    <?php

    function dd($str, $itm)
    {
        echo '<pre>';

        echo "<h2>$str</h2>";

        echo '<h6>Evaluated to</h6>';

        var_dump($itm);

        echo '</pre>';
    }

    function title($title)
    {
        echo "<p>$title</p>";
    }

    function note($text)
    {
        echo "<span>$text</span>";
    }

    function msg()
    {
        echo '<h3>You got a message</h3>';

        return false;
    }

    title('== merge arrays');
    note('Same indexes');

    $x = ['a', 'b', 'c'];
    $y = ['d', 'e', 'f'];

    dd('$x + $y', $x + $y);

    title('+');
    note('Different indexes');

    $x = ['a', 'b', 'c'];
    $y = ['d', 'e', 'f', 'g'];

    dd('$x + $y', $x + $y);

    note('Associtive with same keys');

    $x = ['first' => 'A', 'second' => 'B', 'third' => 'C'];
    $y = ['first' => 'D', 'second' => 'E', 'third' => 'F'];

    dd('$x + $y', $x + $y);

    note('Associtive with different keys');

    $x = ['first' => 'A', 'second' => 'B', 'third' => 'C'];
    $y = ['first' => 'D', 'fourth' => 'E', 'third' => 'F'];

    dd('$x + $y', $x + $y);

    title('== compare arrays');

    note('Same Values');
    $x = ['a', 'b', 'c'];
    $y = ['a', 'b', 'c'];

    dd('$x == $y', $x == $y);

    note('Different Values');
    $x = ['a', 'b', 'c'];
    $y = ['d', 'e', 'f'];

    dd('$x == $y', $x == $y);

    note('same Values with different types using == and ===');
    $x = [1, 2, 3];
    $y = [1, '2', 3];

    dd('$x == $y', $x == $y);

    dd('$x === $y', $x === $y);

    note('Associtive with same keys and values');

    $x = ['first' => 'A', 'second' => 'B', 'third' => 'C'];
    $y = ['first' => 'A', 'second' => 'B', 'third' => 'C'];

    dd('$x == $y', $x == $y);

    note('Associtive with same keys and different values');

    $x = ['first' => 'A', 'second' => 'B', 'third' => 'C'];
    $y = ['first' => 'A', 'second' => 'B', 'third' => 'F'];

    dd('$x == $y', $x == $y);


    note('same Values with different order using == or ===');
    $x = [1, 2, 3];
    $y = [1, 3, 2];

    dd('$x == $y', $x == $y);
    dd('$x === $y', $x === $y);

    note('Associtive with same keys and values but different order using == and ===');

    $x = ['first' => 'A', 'second' => 'B', 'third' => 'C'];
    $y = ['first' => 'A', 'third' => 'C', 'second' => 'B'];

    dd('$x == $y', $x == $y);


    dd('$x === $y', $x === $y);
    ?>

</body>

</html>