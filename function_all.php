<?php
// Built in Function
// User Defined Function
// Function Parameter;
// Function Parameter with default value-> single/multi
// Function Parameter Data Type->hinting
// PHP Strict Mode Enable: declare(strict_types=1);
// PHP Multi Param Datat type
// Null type Params
// Variadic Function
// Anonymous Function
// Arrow Function
// Function Return Type
// Function Multiple Return type.
// Call Back Function
// Recursive function

declare(strict_types=1);

//Param multi param user defined function with Data types hinting
function mySelf(int $age, string $country, int|float|null $salary)
{
  echo "My Age is=$age, My Country is=$country and Salary=$salary";
  echo PHP_EOL;
}
mySelf(36, "Dhaka", 72500);

//Multi Param Default Value 
function addNumber($a, $b, $c = 10, $d = 20)
{
  $sum = $a + $b + $c + $d;
  echo "Sum=$sum";
  echo PHP_EOL;
}
addNumber(10, 20);

//Variadic Function ...
function myVariadic(...$number)
{
  echo $number[2];
  echo PHP_EOL;
}
myVariadic(1, 2, 3, 4, 5);

// Anonymous Function 
(function () {
  echo "Anonymous Called Here Direct";
  echo PHP_EOL;
})();
// Anonymous Function Assign in a Variable.
$funVar = function ($a, $b) {
  echo $a + $b;
  echo PHP_EOL;
};
$funVar(20, 30);
// Arrow Function
$myArrow = fn ($a, $b) => $a + $b;
echo $myArrow(20, 40);
echo PHP_EOL;

// Return Type Function used data type
function myReturn($a, $b): int|float
{
  $avg = ($a + $b) / 2;
  return $avg;
}

echo "Return Result=" . myReturn(10, 5) + 10;

//Call Back Function is a function which is passed as an argument into another function. 
$numbers = [1,2,3,4,5,6,7,8,9,10,12];
isEven(1);
function isEven($n){
    if($n % 2 == 0){
        return true;
    }
    return false;
}
$evenNumbers = array_filter($numbers, "isEven");
print_r($evenNumbers);
//The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.
$numbers = [1,2,3,4,5];
function square($n){
    return $n * $n;
}
$squares = array_map("square", $numbers);
print_r($squares);

//Recursive Function: the function calling itself is called a recursive function
// Recursive First Check it's Exit point
/*if($n == 0){
        return;
    }
*/
function recursiveCountdown($n)
{
    if ($n == 0) {
        return;
    }
    echo "$n\n";
    recursiveCountdown($n - 1);
}
recursiveCountdown(5);
//Factrial Using Recursive Function
function factorial($n)
{
    if ($n == 0) {
        return 1;
    }
    return $n * factorial($n - 1);
}
$result = factorial(4); //4*3*2*1
echo $result;
// Non Recursive Factorial function
function nonrecursiveFact($n)
{
    $result = 1;
    for ($i = $n; $i > 0; $i--) {
        $result = $result * $i;
    }
    echo $result;
}
nonrecursiveFact(5);


