<?php
## Print Numbers from 1 to 10
// - Write a for loop that prints numbers from 1 to 10. (while)
echo '<h2>Print Numbers from 1 to 10<h2/>';
$i = 1;
while ($i <= 10) {
    echo "$i<hr/>";
    $i++;
}
;

echo '<h2>print numbers from 10 down to 1<h2/>';
// - print numbers from 10 down to 1. (do-while)
$n = 10;
do {
    echo "$n <hr/>";
    $n--;
}
while ($n > 0 and $n < 10);

// -  Prints all even numbers from 1 to 20 starting the count from 1. (for)

echo '<h2>Prints all even numbers from 1 to 20 starting the count from 1 <h2/>';

for ($x = 1; $x <= 20; $x++) {
    if ($x == 1 or $x % 2 == 0) {
        echo "$x <hr/>";
    }
}

//    for($x=1;$x<=20 &&  $x %2==0 ;$x++){ echo "$x <hr/>" ;   }

// - Write a for loop that prints the multiplication table of 5 up to 5 × 10. (for)
echo '<h2>Write a for loop that prints the multiplication table of 5 up to 5 × 10 <h2/>';

for ($j = 1; $j <= 10; $j++) {
    $y = 5;
    echo "$y x $j = " . $y * $j . "<hr/>";
}

// - print the square of numbers from 1 to 5. (while)
echo '<h2>Print the square of numbers from 1 to 5 <h2/>';
$f = 1;
while ($f <= 5) {
    echo $f ." ===> ".$f*$f .'<hr/>';
    $f++;
}




// - Print the math timetable from 1 to 12 (optional)
echo '<h2>Print the math timetable from 1 to 12 <h2/>';
for ($j = 1; $j <= 12; $j++) {
    echo "$j <hr/>";
    for ($y = 1; $y <= 12; $y++){
        echo "$j x ". str_pad($y, 2, '0', STR_PAD_LEFT) ." = ". $y * $j . "<br/>";
        };
    
    echo "<hr/>";
}