<?php


// Function syntax
// function function_name ( input ) { proccess and output }
function greetings($name)
{
    echo 'Welcome';
    echo '<br>';
    echo $name;
    echo '<hr>';
}


greetings('Maged');
greetings('Aysha');
greetings('Ranim');
greetings('Ahmed');
greetings('Karim');
greetings('Mohamed');
greetings('Ahmed');


function fullName ($fName, $lName) {
    echo "Full Name is: $fName $lName";
    echo '<hr>';
}

fullName('Maged', 'Yaseen');
fullName('Karim', 'Diab');