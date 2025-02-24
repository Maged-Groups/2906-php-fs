<pre>
<?php

$x = 20;


$GLOBALS['y'] = 10;

var_dump($GLOBALS);
echo '<hr />';

var_dump($_GET);


function test()
{
    // global $x;


    echo ++$GLOBALS['x'];
}

echo $x ;
echo '<hr />';

test();
echo '<hr />';

echo $x;
echo '<hr />';

