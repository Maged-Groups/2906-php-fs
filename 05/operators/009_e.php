<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Operators</title>
    <style>
        pre {
            background-color: #112;
            padding: 10px;
            color: #6f3;
        }

        h6 {
            color: #f00;
        }
    </style>

</head>

<body>

    <h1>Assignment Operators</h1>


    <?php

    function dd($str, $itm)
    {
        echo '<pre>';

        echo "<h2>$str</h2>";

        echo '<h6>Evaluated to</h6>';

        var_dump($itm);

        echo '</pre>';
    }

    dd('$x = 4', $x = 4);

    dd('$x += 1', $x += 1);

    dd('$x -= 3', $x -= 3);

    dd('$x *= 5', $x *= 5);

    dd('$x /= 2', $x /= 2);

    dd('$x **= 2', $x **= 2);

    dd('$x %= 2', $x %= 2);

    ?>

</body>

</html>