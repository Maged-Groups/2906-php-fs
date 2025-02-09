<?php

function dump($item)
{
    ?>
    <style>
        .dump {
            background: #112;
            color: #6e6;
            padding: 6px;
            margin-bottom: 6px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
        }
    </style>
    <?php
    echo '<div class="dump">';
    echo '<pre>';
    var_dump($item);
    echo '</pre>';
    echo '</div>';
}

function dd($item)
{
    ?>
    <style>
        .dd {
            background: #112;
            color: #e22;
            padding: 6px;
            margin-bottom: 6px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
        }
    </style>
    <?php
    echo '<div class="dd">';
    echo '<pre>';
    var_dump($item);
    echo '</pre>';
    echo '</div>';
    die();
}

dump('Soso Duck');
dump(34);
dump(['Swimming', 'Playing Games', 'Watching the Sky']);
dump(['lolo', 'toto']);
dump('New Line 1');
dump('New Line 2');
dd('Last visible line');
dump('New Line 3');
dump('New Line 4');
dump('New Line 5');