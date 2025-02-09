<?php


$score = 30;
$color = 'black';
$grade = 'N/A';

/**
 * Grade Table
 * -----------
 * 95+  A+    => blue
 * 90+  A     => green
 * 85+  B+    => skyblue
 * 80+  B     => magenta
 * 75+  C+    => goldenrod
 * 70+  C     => darkgray
 * 65+  D     => black
 * 50+  E     => orange
 * -50  F     => red
 */

// syntax
// if (  ) {  }  
// if (  logical test(s)  ) {   // action(s) to do    }  



echo "<h3 style='color: $color'>Score $score is $grade</h3>";