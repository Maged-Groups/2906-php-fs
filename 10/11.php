<h1>Arrays</h1>

<pre>
    <?php

    $males = ['Abdelrahman', 'Mohamed', 'Ahmed', 'Ismaiel', 'Sief', 'Yousef', 'Amr', 'Karim'];

    $females = ['Aisha', 'Ranim'];

    $new_names = ['Ahmed', 'Nada', 'Samer'];

    $team = array_merge($males, $females, $new_names);

    var_dump($team);