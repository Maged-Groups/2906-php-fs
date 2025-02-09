<?php


$score = 30;

$grade = 'N/A';

/**
 * Grade Table
 * -----------
 * 90+  Excellent
 * 75+  Very Good
 * 65+  Good
 * 50+  Pass
 * -50  Fail
 */

// syntax
// if (  ) {  }  
// if (  logical test(s)  ) {   // action(s) to do    }  

if ($score >= 90) {
    $grade = 'Excellent';
} elseif ($score >= 75) {
    $grade = 'Very Good';
} elseif ($score >= 65) {
    $grade = 'Good';
} elseif ($score >= 50) {
    $grade = 'Pass';
} else {
    $grade = 'Fail';
}

echo "Score $score is $grade";