<?php
$string="Hello how are You Raju";

//find ascii code of each letter
for($i=0;$i<strlen($string);$i++){
  echo ord($string[$i])." ";
}
//72 101 108 108 111 32 104 111 119 32 97 114 101 32 89 111 117 32 82 97 106 117 
$numbers=array(72, 101, 108, 108, 111, 32, 104, 111, 119, 32, 97, 114, 101, 32, 89, 111, 117, 32, 82, 97, 106, 117 );
echo PHP_EOL;
foreach($numbers as $item){
  echo chr($item)."";
}

////letters with punctuations
// $string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+{}|:<>?[]\;',./";
	
// for($i=0;$i<strlen($string);$i++){
//   echo ord($string[$i])." ";
// }	
	
