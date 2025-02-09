<?php

// function name: introduce
// Output: My name is Sam, I live in Canada
function introduce(string $name, string $country): void
{
    echo "My name is $name, I live in $country <hr/>";
}
// Function call:

introduce('Sam', 'Canada');
introduce(country: 'USA', name: 'Laila');
introduce('Omar', 'Egypt');
introduce(country: 'France', name: 'Sophia');
introduce('Ali', 'UAE');


//
// function name: fullName
// Output: Full Name: John Doe
function fullname(string $first, string $lName): void
{

    echo "Full Name: $first $lName <hr/>";
}
// Function call:

fullName('John', 'Doe');
fullName('Sara', 'Smith');

fullName(lName: 'David', first: 'Brown');

//
// function name: product
// Output: Product: Laptop, Price: $1200
function product(string $product, int $price): void
{
    echo "Product:$product, Price: $price <hr/>";
}
// Function call:

product('Laptop', 1200);
product(price: 800, product: 'Phone');
product('Tablet', 600);
product(price: 300, product: 'Monitor');
product('Keyboard', 100);

//
// function name: book
// Output: Title: Harry Potter, Author: J.K. Rowling
function book(string $title, string $author): void
{
    echo "Title:$title,Author:$author <hr/>";

}
// Function call:

book('Harry Potter', 'J.K. Rowling');
book('1984', 'George Orwell');
book(author: 'Herman Melville', title: 'Moby Dick');

//
// function name: contact
// Output: Name: Ahmed, Phone: 123456789
function contact(string $name, string $phone): void
{
    echo "Name:$name ,Phone:$phone <hr/>";
}
// Function call:

contact('Ahmed', 123456789);
contact(phone: 987654321, name: 'Sara');
contact('Hassan', 111222333);
contact(phone: 555666777, name: 'Nadia');
contact('Youssef', 999888777);


//
// function name: movie
// before 2000 => old movies
// Output: Movie: Inception, Year: 2010, it is a new movie
// Output: Movie: Titanic, Year: 1997, it is an old movie

function movie(string $movie, string $year): void
{
    $msg = $year >= 2000 ? "it is a new movie" : "it is an old movie";

    echo "Movie: $movie, Year: $year. $msg.<hr/>";
}
// Function call:

movie('Inception', 2010);
movie(year: 1997, movie: 'Titanic');
movie(year: 2009, movie: 'Avatar');
movie('Interstellar', 2014);
movie('The Matrix', 1999);