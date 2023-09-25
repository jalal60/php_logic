<?php
	$firstName="John";
	$lastname="Doe";
//echo "First Name: $firstName\nLast Name: $lastname\nDesignation:Developer";
	
//	// heredoc. for string declare. use most
// 	$longText= <<<EOT
// 	First Name: {$firstName}
// 	Last Name: {$lastname}
// 	Designation: Developer
// 	EOT;
// //echo $longText;
	
// 	//nowdoc. for string declare.
// 	echo PHP_EOL;
// 	$longText2= <<<'EOT'
// 	First Name: {$firstName}
// 	Last Name: {$lastname}
// 	Designation: Developer
// 	EOT;
// 	echo $longText;
////Concatanation. 
// 	$fullName="{$firstName} {$lastname}";
// 	echo $fullName;
	$fruit="Apple";
// 	//echo "I have 5 {$fruit}s";
//   echo $fruit[3]; // print character from string like array
	
  $fruits=["Apple","Banana","Orange"];
//   echo $fruits[2]; //print string from Array 
  
  // //strlen() from string
  // $length=strlen($fruit);
  // //echo $length;
  // for($i=0;$i<$length;$i++){
  //   echo $fruit[$i].PHP_EOL;
  // }
	
	//substr() use..
	//$string="Hello World";
	//echo substr($string,0,1);
	//echo substr($string,2); //print from 2 no. index to last character
	//Live Test
	//foreach($month as $x) {
  	 //if (strtolower(substr($x, 0, 1))  == 'm') {
 	  //  print($x);
 	  //}
	//}
  // //find last 5 character from string.
  // echo substr($string,-5);
  
  // // find a string from a sentence using strpos().
  // $stringName="PHP and Laravel Course from Ostad";
  // $position=strpos($stringName,"PHP");// laravel found from 0 to 8 index.
  // echo $position;// return position of string found.
  // if($position!== false){ //must be used !== false otherwise code not work
  //   echo "Found";
  // }
  // else{
  //   echo "Not Found";
  // }
////----------------------------

// //Replace a string withing a string.....
//   $stringNew="PHP and Laravel Course from Ostad";
//   $search="Laravel";
//   $replace="Framework";
//   echo $stringNew.PHP_EOL;
//   $stringReplace=str_replace($search,$replace,$stringNew);
//   echo $stringReplace;

// //Replacing multiple string using array and str_replace() 
//   $mystring="Language and Framework Course form Ostad";
//   $search=["Language","Framework"];
//   $replace=["PHP","Laravel"];
//   $newString=str_replace($search,$replace,$mystring);
//   echo $mystring.PHP_EOL;
//   echo $newString;
  
  // //repeat string using str_repeat() 
  // /*
  // **********
  // *********
  // ********
  // *******
  // ******
  // *****
  // ****
  // ***
  // **
  // *
  // */
  // $char="*";
  // for($i=10;$i>0;$i--){
  //   echo str_repeat($char,$i)."\n";
  // }

  // //explode() and implode() delimeter
  // $stringNew="PHP and Laravel Course from Ostad";
  // $parts=explode(" ",$stringNew);
  // print_r($parts);
  
  // $stringParts=["PHP","and","laravel","Courses","from","Ostad","Team"];
  // $jointString=implode(" ",$stringParts);
  // print_r($jointString);
  
  // //str_split() use for split word from senetence.
  // 	$string="Hello World";
  // 	$parts=str_split($string,2);
  // 	print_r($parts);
  
// 	//wordwrap for cracking Line 
// 	$dummyText="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
// 	$stringParts=wordwrap($dummyText,30,"\n");
// 	echo $stringParts;
