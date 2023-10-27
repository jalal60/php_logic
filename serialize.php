<?php
//serialize() convert Associate Array into String
$data = [
    'name' => 'John Doe',
    'age'  => 30,
    'city' => 'New York',
];
print_r($data);
$serialized = serialize($data);
print_r($serialized);

//unserialize() convert serialize string data into Associate Array
$unserialized = unserialize($serialized);
print_r($unserialized);
