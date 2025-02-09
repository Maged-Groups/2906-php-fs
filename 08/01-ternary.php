<?php

function pass_function($score)
{
    echo "<h3 style='color: green;'>The score $score is pass, congratualtions</h3>";
}

function fail_function($score)
{
    echo "<h3 style='color: red;'>The score $score is fail, see you next year.</h3>";
}

$score = 51;

$score >= 50 ? pass_function($score) : fail_function($score);