<?php

declare(strict_types=1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Juggling</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding: 15px;
        }


        div {
            border: 1px solid #333;
            margin: 10px;
        }

        h2 {
            background-color: #999;
        }

        h3 {
            background-color: #acf;
            padding: 15px;
        }

        h3+p {
            font-size: .8rem;
            padding-left: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid #aaa;
            color: brown;
        }


        pre {
            overflow: auto;
        }

        code {
            color: #4e3;
            background-color: #112;
            display: block;
            padding: 10px;
            margin-left: 10px;
        }
    </style>


</head>

<body>

    <h2>Type Juggling</h2>


    <p>PHP may attempt to convert the type of a value to another automatically in certain contexts. </p>

    <section>

        <pre>
            <code>5 + '4' = <?= 5 + '4'; ?></code>
        </pre>

    </section>

</body>

</html>