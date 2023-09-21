<?php
// //Index Array
// //=========================================
// //Array can declare using array() function [] barcket
// $arr1 = array("Apple", "Banana", "Mango");
// $arr2 = ["Apple", "Banana", "Mango", "Orange"];

// //Accessing Index Array
// echo $arr1[0];
// echo $arr2[1];
// //Using For Loop Index Array
// for ($i = 0; $i < count($arr2); $i++) {
//     echo $arr2[$i] . "\n";
// }
// //Using foreach Loop accesing Array
// foreach ($arr2 as $item) {
//     echo $item . "\n";
// }
// //=======================================
// //Associative arrays:  key-value pairs.
// $person1 = array("firstName" => "Md.", "lastName" => "Jalal");
// $person2 = ["name" => "Rahim Uddin", "age" => 32];

// //Accessing value.
// echo $person1["firstName"] . $person1["lastName"];

// //Looping Associate Value.
// foreach ($person2 as $key => $value) {
//     echo $key . "=" . $value . "\n";
// }
// //=======================

// //Multidimensional arrays. for accessing Loop must be use Double Loop/Inner Loop
// $arr3 = array(
//     array(1, 3, 5, 7),
//     array(2, 4, 6, 8),
//     array(14, 25, 98)
// );
// echo $arr3[0][0];
// echo $arr3[0][1];
// foreach ($arr3 as $item) {
//     echo "\n";
//     foreach ($item as $value) {
//         echo $value . " ";
//     }
// }
// // Multidimension Associate  Array.
// $user1 = [
//     ["name" => "Karim", "age" => 32],
//     ["name" => "Jamal", "age" => 26]
// ];

// foreach ($user1 as $item) {
//     echo "\n";
//     foreach ($item as $key => $value) {
//         echo $key . "=" . $value . " ";
//     }
// }

// $user2 = array(
//     "Karim" => array("age" => 32, "address" => "Jurain"),
//     "Rahim" => array("age" => 20, "address" => "Dhaka"),
//     "Jamal" => array("age" => 18, "address" => "Sylhet")
// );

// // echo $user2["Karim"]["age"];

// foreach ($user2 as $key => $value) {
//     echo "Username: $key\n";
//     foreach ($value as $doublekey => $details) {
//         echo "$doublekey: $details\n";
//     }
// }
