<?php
//This is Example how json data can read,update and delete by PHP
//Read the Json File using file_get_contents() as a string
$file = "./jsondata.json";
$stringContent = file_get_contents($file);
//$data is Associate Array.
$data = array();
$data = json_decode($stringContent, true);
print_r($data);
//Accessing Data
echo $data['jamal@gmail.com']['username'];

function createData($data, $file)
{
    $encodeData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($file, $encodeData);
}
function updateData($data, $email, $file, $rule)
{
    if ($data[$email]) {
        $data[$email]['role'] = $rule;
        $encodeData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($file, $encodeData);
    }
}
function deleteData($data, $email, $file)
{
    if ($data[$email]) {
        unset($data[$email]);
        $encodeData = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($file, $encodeData);
    }
}
//insert new data to $data array 
// $data['rahim@gmail.com'] = [
//     'username' => 'rahim',
//     'password' => '31452',
//     'role' => ''
// ];

createData($data, $file);
// updateData($data, 'jamal@gmail.com', $file, 'manager');
// deleteData($data, 'rahim@gmail.com', $file);
