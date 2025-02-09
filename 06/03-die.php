<?php 


echo 'line 1<hr />';
echo 'line 2<hr />';
// die('The code will stop here!<hr />');
echo 'line 3<hr />';
echo 'line 4<hr />';
echo 'line 5<hr />';


function test () {
    echo 'I am a test function line 1<hr />';
    // return; // exit the function
    die(); // PHP execution will stop
    echo 'I am a test function line 2<hr />';
    echo 'I am a test function line 3<hr />';
}
echo 'line 6<hr />';
echo 'line 7<hr />';
echo 'line 8<hr />';
test();
echo 'line 9<hr />';
echo 'line 10<hr />';