<?php

// function name: about

function about(string $name, int $age): void
{
    echo "<h3>I am $name, I am $age years old</h3><hr>";
}
// Output: I am Adham, I am 24 years old


about('Adham', 24);

about('Nada', 34);

about(age: 24, name: 'Gamal');

about('Adham', 24);

about(age: 27, name: 'Noha');