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
