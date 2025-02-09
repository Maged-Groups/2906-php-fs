<?php

declare(strict_types=1); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>

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

    <h2>PHP supports several data types</h2>

    <h3>Scalar</h3>
    <p>Scalar types are those that can hold only one value at a time.</p>

    <section>
        <p><strong>String:</strong> A sequence of characters.</p>

        <pre>
            <code>$name = 'Soso Duck'</code>
        </pre>

        <p><strong>Integer:</strong> A non-decimal number (32 bit systems: 2,147,483,647 - 64 bit systems: 9,223,372,036,854,775,807)</p>

        <pre>
            <code>$age = 34;</code>
        </pre>

        <p><strong>Float:</strong> A number with a decimal point or a number in exponential form.</p>

        <pre>
            <code>$tall = 169.85;</code>
        </pre>

        <p><strong>Boolean:</strong> Represents two possible states: TRUE or FALSE.</p>

        <pre>
            <code>$active_user = false;</code>
        </pre>
    </section>

    <h3>Compound</h3>
    <p>Compound types are those that can hold multiple values at once.</p>

    <section>
        <p><strong> Array:</strong>Stores multiple values in one single variable.</p>

        <h6>Indexed</h6>

        <pre>
            <code>$hobbies = ['Reading', 'Swimming', 'Playing Games'];</code>
        </pre>

        <h6>Associative</h6>

        <pre>
            <code>$contacts = ['mobile' => '0123456789', 'email' => 'soso.duck@ducks-city.mickey', 'extension' => 3654];</code>
        </pre>

        <p><strong> Object:</strong>An instance of a class.</p>

        <pre>
            <code>
                class User {

                }

                $user = new User();
            </code>
        </pre>
    </section>

    <h3>Special</h3>
    <section>
        <p><strong>NULL:</strong> A variable that has no value assigned to it.</p>

        <pre>
            <code>$bio = null;</code>
        </pre>

        <p><strong>Resource:</strong> A special variable that holds a reference to an external resource.</p>

        <pre>
            <code>
                $file = fopen('file.txt', 'r');
            </code>
        </pre>
    </section>

</body>

</html>