<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Control Operators</title>
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

    <h1>Error Control Operators</h1>
    <h2>Suppress errors usong (@)</h2>

    <?php

    function dd($itm)
    {
        echo '<pre>';

        var_dump($itm);

        echo '</pre>';
    }

    $x = @$s;

    dd($x);

    ?>

</body>

</html>