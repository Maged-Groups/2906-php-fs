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

dump('Soso Duck');
dump(34);
dump(['Swimming', 'Playing Games', 'Watching the Sky']);
dump(['lolo', 'toto']);
