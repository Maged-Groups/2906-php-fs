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



class A
{
    public $name = 'Soso';
    public $age = 33;
}

$user_1_obj = new A;

$user_1_arr = ['name' => 'Soso', 'age' => 33];

dump($user_1_obj);
dump($user_1_arr);
