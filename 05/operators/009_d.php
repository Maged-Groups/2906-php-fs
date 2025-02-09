<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
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

    <h1>Comparison Operators</h1>


    <?php

    function dd($str, $itm)
    {

        $v = htmlentities($str);

        echo '<pre>';

        echo "<h2>$v</h2>";

        echo '<h6>Evaluated to</h6>';

        var_dump($itm);

        echo '</pre>';
    }


    dd('5 > 4', 5 > 4);

    dd('5 >= 5', 5 >= 5);

    dd('5 < 4', 5 < 4);

    dd('3 <= 4', 3 <= 4);

    dd('5 == 4', 5 == 4);

    dd('5 + 4 >= 9 / 1', 5 + 4 >= 9 / 1);

    dd('5 == "5"', 5 == "5");

    dd('5 === "5"', 5 === "5");

    dd('5 <> 4', 5 <> 4);

    dd('5 != 4', 5 != 4);

    dd('5 != "5"', 5 != "5");

    dd('5 !== "5"', 5 !== "5");

    dd('0 == "false"', 0 == "false");

    dd('0 == false', 0 == false);

    dd('0 === false', 0 === false);

    dd('0 == null', 0 == null);

    dd('0 === null', 0 === null);

    dd('null == false', null == false);

    dd('null === false', null === false);
    ?>
</body>

</html>