<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
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

    <h1>Logical Operators</h1>


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

    $n1 = 1;
    $n2 = 5;
    $n3 = 12;
    $n4 = 22;

    title('&&');

    dd('$n1', $n1);
    dd('$n2', $n2);
    dd('$n3', $n3);
    dd('$n4', $n4);


    dd('$n4 > $n3', $n4 > $n3);

    dd('$n4 > $n3 && $n3 > $n2', $n4 > $n3 && $n3 > $n2);

    dd('$n4 > $n3 && $n3 > $n2 && $n2 > $n1', $n4 > $n3 && $n3 > $n2 && $n2 > $n1);

    dd('$n2 > $n3 && $n2 > $n1', $n2 > $n3 && $n2 > $n1);

    title('||');

    dd('$n4 > $n3', $n4 > $n3);

    dd('$n4 > $n3 || $n3 > $n2', $n4 > $n3 || $n3 > $n2);

    dd('$n4 > $n3 || $n3 > $n2 || $n2 > $n1', $n4 > $n3 || $n3 > $n2 || $n2 > $n1);

    dd('$n2 > $n3 || $n2 > $n1', $n2 > $n3 || $n2 > $n1);

    dd('$n1 > $n3 || $n1 > $n2', $n1 > $n3 || $n1 > $n2);

    title('! (<small>UNARY</small>)');

    dd('!true', !true);

    dd('!false', !false);

    title('Example: instead of this');

    $city = 'Alex';

    dd('$city', $city);

    dd('$city == "Cairo" || $city == "Banha" || $city == "Tanta" || $city == "Giza" || $city == "Menofya" || $city == "Sharkia"', $city == 'Cairo' || $city == 'Banha' || $city == 'Tanta' || $city == 'Giza' || $city == 'Menofya' || $city == 'Sharkia');

    // use this
    dd('!($city == "Alex")', !($city == "Alex"));

    title('Precedence');

    $x = true;
    $y = false;


    $z = $x && $y;

    dd('$z = $x && $y', $z);

    $z = $x and $y;
    dd('$z = $x and $y', $z);
    note('$z = $x runs first, and $y discard, because of (=) has a high precedence than (and)');

    title('Anther Precedence Example');

    dd('$x and msg() || true', $x and msg() || true);

    dd('$x && msg() || true', $x && msg() || true);



    dd('$y and msg() || true', $y and msg() || true);

    note('This like said: $y and (msg() || true) -> so, false and true is false');

    dd('($y and msg()) || true', ($y and msg()) || true);

    dd('$y && msg() || true', $y && msg() || true);
    note('This like said: ($y && msg()) || true -> so, false or true is true');


    ?>

</body>

</html>