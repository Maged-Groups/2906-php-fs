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
function createFolder($folderName)
{
    // Check if the folder already exists
    if (!file_exists($folderName)) {
        // Attempt to create the folder
        @mkdir("public/uploads/$folderName", 0777, true);

    }
}
function get_ext($img_name)
{
    return  pathinfo($img_name, PATHINFO_EXTENSION);
    
}