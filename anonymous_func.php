<?php
//Zero Anonymous Function
//sample ()();
(function () {
})();

//calling Example 
(function () {
  $a = 10;
  $b = 20;
  echo $a + $b;
})();

//Assign Anonymous Function 
$newFunc = function () {
  $x = 20;
  $y = 30;
  echo $x + $y;
};
$newFunc();

// Anonymous Function Act as Normal Function
$myFunc = function (int $age, string $city) {
  echo "My age is $age and City is $city";
};

$myFunc(36, "Dhaka");
