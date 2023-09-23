<?php
//Array All type of Excercise.....
//------------------------------------------------
//Associative Array 4 type of sort: asort(), ksort(), arsort(), krsort()
$person = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
//ascending order sort by value asort()..
echo "Ascending Order Sort by value:\n";
asort($person);
foreach ($person as $key => $value) {
    echo "$key: $value\n";
}
//ascending order sort by Key
echo "Ascending Order Sort by Key:\n";
ksort($person);
foreach ($person as $key => $value) {
    echo "$key: $value\n";
}
//descending  order sort by value asort()..
echo "Descending  Order Sort by value:\n";
arsort($person);
foreach ($person as $key => $value) {
    echo "$key: $value\n";
}

//Descending order sort by Key
echo "Descending Order Sort by Key:\n";
krsort($person);
foreach ($person as $key => $value) {
    echo "$key: $value\n";
}


//Temperature in Array Calculate
//------------------------------
//Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
$temperature = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum = 0;
foreach ($temperature as $item) {
    $sum = $sum + $item;
}
$avg_temp = ($sum / count($temperature));
echo "Average Temperature is: $avg_temp\n";
//sort array by lowest to Highest
echo "List of Five lowest temperatures" . PHP_EOL;
sort($temperature);
for ($i = 0; $i < 5; $i++) {
    echo $temperature[$i] . " ";
}
echo PHP_EOL;
echo "List of Five Highest temperatures" . PHP_EOL;
rsort($temperature);
for ($i = 0; $i < 5; $i++) {
    echo $temperature[$i] . " ";
}
