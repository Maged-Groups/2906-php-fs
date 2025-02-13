<h1>Arrays</h1>

<pre>
    <?php
    $team_1 = ['Abdelrahman', 'Mohamed', 'Ahmed', 'Ismaiel', 'Sief', 'Yousef', 'Amr', 'Karim'];

    $team_2 = ['Ahmed', 'Nada', 'Samer'];

    $intersect = array_intersect($team_1, $team_2);

    var_dump($intersect);