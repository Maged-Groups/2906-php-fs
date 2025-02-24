<?php 

function dump($item)
{
    echo '<pre>';
    var_dump($item);
    echo '</pre>';
}

function dd($item)
{
    echo '<pre>';
    var_dump($item);
    echo '</pre>';
    die();
}