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
