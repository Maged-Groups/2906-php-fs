<?php

declare(strict_types=1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Casting</title>

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

    <h2>Type Casting</h2>


    <p>The casts allowed are</p>

    <section>
        <p><strong>(string)</strong>- cast to string</p>
        <p><strong>(int)</strong>- cast to int</p>
        <p><strong>(float)</strong>- cast to float</p>
        <p><strong>(bool)</strong>- cast to bool</p>
        <p><strong>(array)</strong>- cast to array</p>
        <p><strong>(object)</strong>- cast to object</p>
        <p><strong>(unset)</strong>- cast to NULL</p>
        <p><strong>String:</strong> A sequence of characters.</p>

        <pre>
            <code>$name = (string)'Soso Duck'</code>
        </pre>

        <p><strong>Integer:</strong> A non-decimal number (32 bit systems: 2,147,483,647 - 64 bit systems: 9,223,372,036,854,775,807)</p>

        <pre>
            <code>$age = (int) '34';</code>
        </pre>

        <p><strong>Float:</strong> A number with a decimal point or a number in exponential form.</p>

        <pre>
            <code>$tall = (float) 169.85;</code>
        </pre>

        <p><strong>Boolean:</strong> Represents two possible states: TRUE or FALSE.</p>

        <pre>
            <code>$active_user = (bool) false;</code>
        </pre>
    </section>

</body>

</html>