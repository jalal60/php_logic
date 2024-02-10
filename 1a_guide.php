<?php
//////////////////////ALL ABOUT FUNCTION////////////////////////////
//Declare Restricted Data Type
declare(strict_types=1);
//Declare FUnction as multiple Data type.
function myFun(int|string|null $age, string $name, int $default = 20)
{
    echo "Age=" . $age . "Name=" . $name . "Default=" . $default . PHP_EOL;
}
myFun(null, "Jalal", 50);
myFun(10, "Kamal");

//Function has return value with type
function sum(int $a, int $b): int
{
    return $a + $b;
}
echo sum(25, 40);

//Create and Assign Anonyms Function
$demoFun = function () {
    $x = 10;
    $y = 20;
    echo $x + $y;
};

//Call Anonyms function
$demoFun();

//Arrow Function
$arrowFun = fn ($x, $y) => $x + $y;
echo $arrowFun(20, 82);
$arrowFun2 = fn () => 100;
echo $arrowFun2();

