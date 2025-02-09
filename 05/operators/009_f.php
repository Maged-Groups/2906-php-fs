<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment/Decrement Operators</title>
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

    <h1>Increment/Decrement Operators</h1>


    <?php

    function dd($str, $itm)
    {
        echo '<pre>';

        echo "<h2>$str</h2>";

        echo '<h6>Evaluated to</h6>';

        var_dump($itm);

        echo '</pre>';
    }
    $x = 1;

    dd('$x', $x);

    dd('$x++', $x++);

    dd('$x', $x);

    dd('++$x', ++$x);

    dd('$x', $x);

    dd('$x--', $x--);

    dd('$x', $x);

    dd('--$x', --$x);

    dd('$x', $x);

    $alph = 'a';
    // $alph = 'A';


    dd('$alph', $alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);
    dd('++$alph', ++$alph);

    // decrement does not work
    dd('--$alph', --$alph);
    dd('--$alph', --$alph);

    ?>

</body>

</html>