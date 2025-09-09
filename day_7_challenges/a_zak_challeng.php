<?php
// function name: movie
// before 2000 => old movies
// Output: Movie: Inception, Year: 2010, it is a new movie
// Output: Movie: Titanic, Year: 1997, it is an old movie
// Function call:

// movie('Inception', 2010);
// movie(1997, 'Titanic', );
// movie(2009, 'Avatar');
// movie('Interstellar', 2014);
// movie('The Matrix', 1999);
function movie(string $name, int $product_year)
{
    echo "Movie: $name, Year: $product_year , ";
    echo $product_year >= 2000 ? 'it is a new movie <hr/>' : 'it is an old movie <hr/>';
    
}
movie('Inception', 2010);
movie(product_year: 1997, name: 'Titanic', );
movie(product_year: 2009, name: 'Avatar');
movie('Interstellar', 2014);
movie('The Matrix', 1999);