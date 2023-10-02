<?php
$username="Jalal";
$password="Jalal123";
//$passHash=md5($password);
$passHash="c8ee292ae0725a609e777c7586578d02";
//echo $passHash;

$userformName="Jalal";
$userformPass="Jalal123";

if($userformName==$username && md5($userformPass)==$passHash){
  echo "Hello $username";
}
else{
  echo "Invalid Password or ID";
}

// //From File Inpput Hash
// $content = file_get_contents("./abcd.txt");
// echo $content;

// $hash = md5($content);
// echo $hash;
