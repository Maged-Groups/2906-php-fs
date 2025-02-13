<h1>Arrays</h1>

<pre>
    <?php

    $user = [
        'name' => '',
        'age' => '',
        'city' => '',
        'country' => '',
        'salary' => '',
        'email' => '',
    ];


    $exists = array_key_exists('email', $user);

    var_dump($exists);