<h1>Arrays</h1>

<pre>
    <?php
    $nums = [50, 30, 20, 15.20, 66.80, 80, 40, 50, 6, 22, 30, 21, 11, 21, 2, 60];

    sort($nums);

    $new_nums = array_reverse($nums);
    
    var_dump($nums);
    
    var_dump($new_nums);
    
