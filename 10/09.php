<h1>Arrays</h1>

<pre>
    <?php

    // $names = ['Soso', 'Lolo', 'Toto', 'Dahab', 'Mickey', 'Mimi'];
    $names = [
        0 => 'Soso',
        1 => 'Lolo',
        2 => 'Toto',
        3 => 'Dahab',
        4 => 'Mickey',
        5 => 'Mimi'
    ];


    $exists = array_key_exists(4, $names);

    var_dump($exists);