<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators Precedence</title>
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

    <h1>Operators Precedence</h1>

    <a href="https://www.php.net/manual/en/language.operators.precedence.php" target="_blank">Reference</a>

    <?php

    function dd($str, $itm)
    {
        echo '<pre>';

        echo "<h2>$str</h2>";

        echo '<h6>Evaluated to</h6>';

        var_dump($itm);

        echo '</pre>';
    }


    dd('5 + 4 * 3 / 2 - 1', 5 + 4 * 3 / 2 - 1);

    dd('true && false', true && false);

    $x = true;
    $y = false;

    $z = $x && $y;
    dd('$z = $x && $y', $z);

    $r = $x and $y;
    dd('$r = $x and $y', $r);
    ?>






</body>

</html>