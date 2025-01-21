<?php
# PHP Challenges for Students
// These challenges focus on practicing functions and parameters in PHP. They are designed to help students get comfortable with function definitions, passing parameters, and echoing results.


### 1. **Simple Greeting**
// Create a function `greet()` that accepts a name as a parameter and echoes "Hello, [name]!"
function greet($name) {
    echo '1. Simple Greeting';
    echo "<br />";
    echo "Hello, $name!";
}
greet('Aysha');
echo "<br /> <br />" ;

### 2. **Age Message**
// Create a function `displayAge()` that accepts a name and age as parameters and echoes "[name] is [age] years old."
function displayAge($name, $age) {
    echo '2. Age Message';
    echo "<br />";
    echo "$name is $age years old.";
}
displayAge('Aysha', 22);
echo "<br /> <br />";

### 3. **Sum of Two Numbers**
// Create a function `addNumbers()` that accepts two numbers as parameters and echoes their sum.
function addNumbers($num1, $num2) {
    echo '3. Sum of Two Numbers';
    echo "<br />";
    echo "$num1 + $num2 = ".($num1 + $num2);
}
addNumbers(5, 10);
echo "<br /> <br />";

### 4. **Multiplication Table**
// Create a function `multiply()` that accepts two parameters: a number and how many times to multiply it. Echo the result of the multiplication.
function multiply($num, $times) {
    echo '4. Multiplication Table';
    echo "<br />";
    for ($i = 0; $i < $times; $i++) {
        echo "$num * $i = ".($num * $i)."<br />";
    }
}
multiply(5, 10);
echo "<br />";

### 5. **Full Name**
// Create a function `getFullName()` that accepts first name and last name as parameters and echoes the full name.
function getFullName($fristName, $lastName){
    echo '5. Full Name';
    echo "<br />";
    echo "My name is $fristName $lastName.";
}
getFullName('Aysha', 'Kassem');
echo "<br /> <br />";

### 6. **Person Introduction**
// Create a function `introducePerson()` that accepts a name, age, and city as parameters, and echoes a message: "My name is [name], I am [age] years old, and I live in [city]."
function introducePerson($name, $age, $city){
    echo '6. Person Introduction';
    echo "<br />";
    echo "My name is $name, I am $age years old, and I live in $city.";
}
introducePerson('Aysha', 22, 'ALX');
echo "<br /> <br />";

### 8. **Simple Discount**
// Create a function `applyDiscount()` that accepts the original price and a discount percentage as parameters, then echoes the discounted price.
function applyDiscount($price, $discount){
    echo '8. Simple Discount';
    echo "<br />";
    echo "Original price: $price<br />";
    echo "Discount percentage: $discount%<br />";
    echo "Discounted price: ".($price - ($price * $discount / 100));
}
applyDiscount(2500, 20);
echo "<br /> <br />";

### 9. **Rectangle Area**
// Create a function `rectangleArea()` that accepts the width and height of a rectangle as parameters, and echoes the area (width * height).
function rectangleArea($width, $height){
    echo '9. Rectangle Area';
    echo "<br />";
    echo "Width: $width<br />";
    echo "Height: $height<br />";
    echo "Area: ".($width * $height);
}
rectangleArea(5, 10);
echo "<br />";

### 10. **Simple Calculator**
// Create a function `calculate()` that accepts two numbers then echos (addition, subtraction, multiplication, and division) as results.
function calculate($num1, $num2, $operation){
    echo "<br />";
    echo '10. Simple Calculator';
    echo "<br />";
    echo "Number 1: $num1<br />";
    echo "Number 2: $num2<br />";
    echo "Operation: $operation<br />";
    switch($operation){
        case 'addition':
            echo 'Addition: '.($num1 + $num2);
            break;
        case'subtraction':
            echo 'Subtraction: '.($num1 - $num2);
            break;
        case'multiplication':
            echo 'Multiplication: '.($num1 * $num2);
            break;
        case 'division':
            if($num2!= 0){
                echo 'Division: '.($num1 / $num2);
            } else {
                echo 'Error: Division by zero';
            }
            break;
        default:
    }
}
calculate(5, 10, 'addition');
echo "<br />";
calculate(20, 3, 'subtraction');
echo "<br />";
calculate(15, 5, 'multiplication');
echo "<br />";
calculate(20, 0, 'division');
echo "<br />";
calculate(20, 5, 'division');
echo "<br /> <br />";


### 11. **Temperature Converter**
// Create a function `convertToCelsius()` that accepts a temperature in Fahrenheit as a parameter and converts it to Celsius (use the formula: (F - 32) * 5/9).
function convertToCelsius($temperature){
    echo '11. Temperature Converter';
    echo "<br />";
    echo "Temperature in Fahrenheit: $temperature<br />";
    echo "Temperature in Celsius: ".(($temperature - 32) * 5 / 9);
}
convertToCelsius(100);
echo "<br /> <br />";

### 12. **Circle Area*
// Create a function `circleArea()` that accepts the radius of a circle as a parameter and echoes the area of the circle (pi * radius^2).
function circleArea($radius){
    echo '12. Circle Area';
    echo "<br />";
    echo "Radius: $radius<br />";
    echo "Area: ".(pi() * pow($radius, 2));
}
circleArea(5);
echo "<br /> <br />";

### 15. **Concat Strings**
// Create a function `concatStrings()` that accepts two strings as parameters and echoes their concatenated result.
function concatStrings($string1, $string2){
    echo '15. Concat Strings';
    echo "<br />";
    echo "String 1: $string1<br />";
    echo "String 2: $string2<br />";
    echo "Concatenated Result: $string1 $string2";
}
concatStrings('Hello', 'World');
echo "<br /> <br />";

### 16. **Exchange Rate**
// Create a function `convertCurrency()` that accepts an amount in EGP and a conversion rate, and other currency, and echoes the converted amount.
function convertCurrency($amount, $currency, $namecurrency){
    echo '16. Exchange Rate';
    echo "<br />";
    echo "Amount in EGP: $amount<br />";
    echo "Conversion Rate: $currency/$namecurrency<br />";
    echo "Converted Amount: ".($amount * $currency);
}
convertCurrency(1000, 50.29, 'USD');
echo "<br /> <br />";
convertCurrency(1000, 13.41, 'Saudi Riyal');
echo "<br /> <br />";


### 17. **Add Prefix to Name**
// Create a function `addPrefix()` that accepts a prefix and a name as parameters and echoes the name with the prefix added.
function addPrefix($prefix, $name){
    echo '17. Add Prefix to Name';
    echo "<br />";
    echo "Prefix: $prefix<br />";
    echo "Name: $name<br />";
    echo "Name with Prefix: $prefix $name";
}
addPrefix('Ms.', 'Aysha');
echo "<br /> <br />";


### 18. **Length of a String**
// Create a function `stringLength()` that accepts a string and echoes the length of the string.
function stringLength($string){
    echo '18. Length of a String';
    echo "<br />";
    echo "String: $string<br />";
    echo "Length: ".strlen($string);
}
stringLength('My name is Aysha Kassem');
echo "<br /> <br />";

### 19. **Personalized Welcome**
// Create a function `welcomeUser()` that accepts a name and a city as parameters, and echoes "Welcome [name] from [city]!"
function welcomeUser($name, $city){
    echo '19. Personalized Welcome';
    echo "<br />";
    echo "Name: $name<br />";
    echo "City: $city<br />";
    echo "Welcome $name from $city!";
}
welcomeUser('Aysha', 'ALX');
echo "<br /> <br />";

### 20. **Power of Number*
// Create a function `powerOfNumber()` that accepts a base number and an exponent as parameters, and echoes the result of base raised to the power of exponent.
function powerOfNumber($number, $exponent){
    echo '20. Power of Number';
    echo "<br />";
    echo "Base Number: $number<br />";
    echo "Exponent: $exponent<br />";
    echo "Result: ".pow($number, $exponent);
}
powerOfNumber(2, 5);
echo "<br /> <br />";


echo 'fnishhhhh 😁😁😁😁😁😁😁😁';