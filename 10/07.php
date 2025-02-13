<h1>Arrays</h1>

<pre>
    <?php

    $names = ['Soso', 'Lolo', 'Toto', 'Dahab', 'Mickey', 'Mimi'];


    $exists = array_search('Dahab', $names);

    var_dump($exists);