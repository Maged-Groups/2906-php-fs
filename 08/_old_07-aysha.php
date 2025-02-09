<?php

echo 'function 1: introduce <br />';
// function name: introduce
// Output: My name is Sam, I live in Canada
// Function call:
function introduce(string $name, string $city): void
{
    echo "My name is $name, I live in $city <br />";
}
introduce('Sam', 'Canada');
introduce(city: 'USA', name: 'Laila');
introduce('Omar', 'Egypt');
introduce(city: 'France', name: 'Sophia');
introduce('Ali', 'UAE');

// introduce('Sam', 'Canada');
// introduce('USA', 'Laila');
// introduce('Omar', 'Egypt');
// introduce('France', 'Sophia');
// introduce('Ali', 'UAE');


//
echo '<hr />function 2: fullName <br />';
// function name: fullName
// Output: Full Name: John Doe
// Function call:
function fullName(string $firstName, string $lastName): void
{
    echo "Full Name: $firstName $lastName <br />";
}
fullName('John', 'Doe');
fullName(lastName: 'Sara', firstName: 'Smith');
fullName('Ali', 'Khan');
fullName('Nour', 'Fahmy');
fullName(lastName: 'David', firstName: 'Brown');

// fullName(first: 'John', 'Doe');
// fullName('Sara', first: 'Smith');
// fullName(first: 'Ali', 'Khan');
// fullName('Nour', 'Fahmy');
// fullName('David', first: 'Brown');

//
echo '<hr />function 3: product <br />';
// function name: product
// Output: Product: Laptop, Price: $1200
// Function call:
function product(string $product, int $price): void
{
    echo "Product: $product, Price: $price <br />";
}
product('Laptop', 1200);
product(price: 800, product: 'Phone');
product('Tablet', 600);
product(price: 300, product: 'Monitor');
product('Keyboard', 100);

// product('Laptop', 1200);
// product(800, 'Phone');
// product('Tablet', 600);
// product(300, 'Monitor');
// product('Keyboard', 100);

//
echo '<hr />function 4: book <br />';
// function name: book
// Output: Title: Harry Potter, Author: J.K. Rowling
// Function call:
function book(string $title, string $author): void
{
    echo "Title: $title, Author: $author <br />";
}
book('Harry Potter', 'J.K. Rowling');
book(title: '1984', author: 'George Orwell');
book('The Hobbit', 'J.R.R. Tolkien');
book('Pride and Prejudice', 'Jane Austen');
book(author: 'Herman Melville', title: 'Moby Dick');

// book('Harry Potter', 'J.K. Rowling');
// book(book: '1984', author: 'George Orwell');
// book('The Hobbit', 'J.R.R. Tolkien');
// book('Pride and Prejudice', 'Jane Austen');
// book(author: 'Herman Melville', book: 'Moby Dick');

//
echo '<hr />function 5: contact <br />';
// function name: contact
// Output: Name: Ahmed, Phone: 123456789
// Function call:
function contact(string $name, int $phone): void
{
    echo "Name: $name, Phone: $phone <br />";
}
contact('Ahmed', 123456789);
contact(phone: 987654321, name: 'Sara');
contact('Hassan', 111222333);
contact(phone: 555666777, name: 'Nadia');
contact('Youssef', 999888777);

// contact('Ahmed', 123456789);
// contact(987654321, 'Sara');
// contact('Hassan', 111222333);
// contact(555666777, 'Nadia');
// contact('Youssef', 999888777);


//
echo '<hr />function 6: movie <br />';
// function name: movie
// before 2000 => old movies
// Output: Movie: Inception, Year: 2010, it is a new movie
// Output: Movie: Titanic, Year: 1997, it is an old movie
// Function call:
function movie(string $name, int $year): void
{
    echo $year < 2000 ?
        "Movie: $name, Year: $year, it is an old movie <br />"
        :
        "Movie: $name, Year: $year, it is a new movie <br />";
}
movie('Inception', 2010);
movie(year: 1997, name: 'Titanic', );
movie(year: 2009, name: 'Avatar');
movie('Interstellar', 2014);
movie('The Matrix', 1999);
echo '<hr /><br /><br />more example';
echo '<hr />function 7: calculateArea <br />';
// function name: calculateArea
// Output: Area of Rectangle with length 5 and width 10 is 50
// Function call:
function calculateArea(float $length, float $width): void
{
    echo "Area of Rectangle with length $length and width $width is " . ($length * $width) . "<br />";
}
calculateArea(5, 10);
calculateArea(length: 7.5, width: 12);
calculateArea(3, 8);
calculateArea(length: 6.2, width: 4.5);
calculateArea(10, 10);
echo '<hr />function 9: isEligibleToVote <br />';
// function name: isEligibleToVote
// Output: Sam is eligible to vote.
// Output: Ali is not eligible to vote.
// Function call:
function isEligibleToVote(string $name, int $age): void
{
    echo $age >= 18 ? "$name is eligible to vote." . "<br />" : "$name is not eligible to vote." . "<br />";
}
isEligibleToVote('Sam', 25);
isEligibleToVote(name: 'Ali', age: 16);
isEligibleToVote('Laila', 18);
isEligibleToVote(name: 'Omar', age: 30);
isEligibleToVote('Sophia', 17);

// movie('Inception', 2010);
// movie(1997, 'Titanic', );
// movie(2009, 'Avatar');
// movie('Interstellar', 2014);
// movie('The Matrix', 1999);
echo '<hr />function 10: checkNumberType <br />';
// function name: checkNumberType
// Output: 10 is an even number.
// Output: 15 is an odd number.
// Function call:
function checkNumberType(int $number): void
{
    echo ($number % 2 === 0) ? "$number is an even number. <br />" : "$number is an odd number. <br />";
}
checkNumberType(10);
checkNumberType(15);
checkNumberType(22);
checkNumberType(37);
checkNumberType(0);
echo '<hr />function 11: checkTemperature <br />';
// function name: checkTemperature
// Output: 30°C is hot.
// Output: 15°C is moderate.
// Function call:
function checkTemperature(float $temperature): void
{
    echo ($temperature > 25) ? "$temperature is hot. <br />" : "$temperature is moderate. <br />";
}
checkTemperature(30);
checkTemperature(15);
checkTemperature(20);
checkTemperature(28);
checkTemperature(10);
echo '<hr />function 12: checkGrade <br />';
// function name: checkGrade
// Output: Score 85 is a Pass.
// Output: Score 45 is a Fail.
// Function call:
function checkGrade(int $score): void
{
    echo ($score >= 50) ? "Score $score is a Pass. <br />" : "Score $score is a Fail. <br />";
}
checkGrade(85);
checkGrade(45);
checkGrade(60);
checkGrade(30);
checkGrade(90);