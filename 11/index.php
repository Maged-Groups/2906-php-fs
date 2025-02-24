<pre>
<?php

// echo __FILE__;
// echo '<hr />';


// echo __DIR__;
// echo '<hr />';

$files = scandir(__DIR__);

// var_dump($files);

$diff = array_diff($files, ['.', '..']);
// var_dump($diff);

foreach ($diff as $file) {

    echo is_dir($file) ?
        "<a href='$file'><strong>[$file]</strong></a> "
        :
        "<a href='$file'>$file</strong></a> ";
}