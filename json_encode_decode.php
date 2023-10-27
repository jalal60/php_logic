<?php
//Json Data Deal with Associate Array.
$data = [
    'name' => 'John Doe',
    'age'  => 30,
    'city' => 'New York',
];
print_r($data);

//json_encode($data) is converting array data into String type data. 
$encoded = json_encode($data);
print_r($encoded); //Showing String {"name":"John Doe","age":30,"city":"New York"}
echo PHP_EOL;
//Now We can decode encoded json string data into Associative Array 
$decoded = json_decode($encoded, true); //'true' is indicate convert into array
print_r($decoded);
echo $decoded['name'];
