<?php

function concatStrings($fname , $lname , $city)  {

    echo "first name is : $fname .";
    echo '<br>';
    
    echo "las name Is : $lname .";
    echo '<br>';
    echo "i live in : $city .";
    echo '<br>';
    echo "Full Name  Is : $fname $lname  i live in $city .";  
}


concatStrings('karim' , 'diab' , 'alexandria');