<h1>Arrays</h1>

<pre>
    <?php

    $names = ['Soso', 'Lolo', 'Toto', 'Dahab', 'Mickey', 'Mimi'];

    $exists = in_array('dahab', $names, );

    var_dump($exists);


    $ages = [50, 30, 20, 15, 66, 80, 40, 50, 6, 22, 30, 21, 11, 21, 2, 60];

    $age_exists = in_array('30', $ages, true);

    var_dump($age_exists);