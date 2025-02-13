<h1>Arrays</h1>

<pre>
<?php

// $users = array('Soso', 'Lolo', 'Toto', 'Mickey', 'Mimi');
$users = ['Soso', 'Lolo', 'Toto', 'Mickey', 'Mimi'];

//convert array to string (impolde - join)
$users_str = implode(':: - ::', $users);
$users_arr = join('-', $users);

$name_str = "Hany Ameen Moustafas Mohamed Ahmed";

// Convert string to array (explode)
$name_arr = explode(' ', $name_str);


var_dump($users_arr);

// Add to the end of the array
array_push($users, 'Zizi', 'Batout');

var_dump($users);

// array_shift — Shift an element off the beginning of array
array_shift($users);

var_dump($users);

// array_unshift — Prepend one or more elements to the beginning of an array

// array_pop — Pop the element off the end of array


// array_splice — Remove a portion of the array and replace it with something else
// remove 3 items starting from index 1
$new_users = array_splice($users, 1, 3);
var_dump($users);

// remove all items starting from index 1
array_splice($users, 1);
var_dump($users);

// add 4 items starting from index 0
$new_users = array_splice($users, 0, 0, ['Mahzouz', 'Dahab', 'Bata', 'Koka']);
var_dump($users);

// replace 2nd item with a new item
$new_users = array_splice($users, 1, 1, ['3m Dahab']);
var_dump($users);

// array_slice — Extract a slice of the array
$new_users = array_slice($users, 1, 3);
var_dump($new_users);
var_dump($users);



