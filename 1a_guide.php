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

//callback function
function hello($a)
{
    $a();
    // $a();
}
hello(function () {
    echo "Hello Callback Function";
});

/////////////////////////CALL BACK FUNCTION///////////////////////////////
//Simple declare a callback function.
function process($callback)
{
    $callback();
}
process(function () {
    echo "Hello Callback Again";
});
echo PHP_EOL;
//More About Callback Function
function add($x, $y)
{
    $result = $x + $y;
    echo "Adding=" . $result . PHP_EOL;
}
function sub($x, $y)
{
    $result = $x - $y;
    echo "Subtracting=" . $result . PHP_EOL;
}
function myCallback($x, $y, $cb)
{
    if (is_callable($cb)) {
        $cb($x, $y);
    } else {
        echo "No Function";
    }
}
myCallback(20, 30, "sub");

//Practical Example of CallBack Function odd even by array_filter()
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function isEven($n)
{
    if ($n % 2 == 0) {
        return true;
    } else
        return false;
}
$evenNum = array_filter($arr1, "isEven");
print_r($evenNum);

//Callback function by finding Male Female by array_filter()
$persons = [
    ['name' => 'Md. Shahjalal', 'gender' => 'Male'],
    ['name' => 'Kamal', 'gender' => 'Male'],
    ['name' => 'Jamal', 'gender' => 'Male'],
    ['name' => 'Monika', 'gender' => 'Female'],
    ['name' => 'Shofiq', 'gender' => 'Male'],
    ['name' => 'Jui', 'gender' => 'FeMale'],
];

function isMale($person)
{
    if ($person['gender'] == 'Male')
        return true;
}
function isFemale($person)
{
    if ($person['gender'] == 'FeMale')
        return true;
}
$result = array_filter($persons, "isMale");
print_r($result);

//Using array_map callback function
$number = [1, 2, 3, 4, 5];
function square($n)
{
    return $n * $n;
}
function cube($n)
{
    return $n * $n * $n;
}
$show = array_map("cube", $number);
print_r($show);


