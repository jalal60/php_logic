<?php
/* SSC Grade Conversion System.
-----------------------------------------------
src: http://www.educationboard.gov.bd/grads.htm 
Class Interval Letter Grade Grade Point
-------------  ------------ ----------- 
    80-100          A+          5
    70-79           A           4
    60-69           A-          3.5    
    50-59           B           3
    40-49           C           2
    33-39           D           1
    0-32            F           0 
-------------------------------------------
*/
$marks = 62;
$gradeLetter = "Unknown";
$gradePoint = -1;
if ($marks >= 80 && $marks <= 100) {
    $gradeLetter = "A+";
    $gradePoint = 5;
} else if ($marks >= 70 && $marks <= 79) {
    $gradeLetter = "A";
    $gradePoint = 4;
} else if ($marks >= 60 && $marks <= 69) {
    $gradeLetter = "A-";
    $gradePoint = 3.5;
} else if ($marks >= 50 && $marks <= 59) {
    $gradeLetter = "B";
    $gradePoint = 3;
} else if ($marks >= 40 && $marks <= 49) {
    $gradeLetter = "C";
    $gradePoint = 2;
} else if ($marks >= 33 && $marks <= 39) {
    $gradeLetter = "D";
    $gradePoint = 1;
} else if ($marks >= 0 && $marks <= 32) {
    $gradeLetter = "F";
    $gradePoint = 0;
} else if ($marks < 0 || $marks > 100) {
    echo "Invalid Input".PHP_EOL;
}
echo "Letter Grade=$gradeLetter";
echo PHP_EOL;
echo "Grade Point=$gradePoint";
