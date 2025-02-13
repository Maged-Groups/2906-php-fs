<h1>Arrays</h1>
<pre>

<?php


$ages = [50, 30, 20, 15, 66, 80, 40, 50, 6, 22, 30, 21, 11, 21, 2, 60];


function is_old($age)
{
    return $age >= 21;
}


$old_ages = array_filter($ages, 'is_old');

var_dump($old_ages);

// $old_ages = [50,30];

// Get the young ages!