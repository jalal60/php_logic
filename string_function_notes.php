<?php
  /*1) substr(string $string, int $offset/startposition, int|null $length):string;
    2) strpos(string $haystack,mixed $needle,int $offset=0):int
    3) str_replace(string $search,string $replace,string $inputstring,int $count):string
    4) strtr(string $string, array $replace_pairs): string
    5) str_repeat(string $string, int $times): string
    6) explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
    7) implode(string $separator, array $array): string
    8) str_split(string $string, int $length = 1): array
  */
//substr(string $string, int $offset/startposition, int|null $length):string;
//substr() ফাংশন দ্বারা আমরা কোন string এর সাব অংশ বের করতে পারি। এখানে প্রথম ভেরিয়েবল $string 
//পরের ভেরিয়েবল string এর প্রথম অবস্থান যা 0 থেকে শুরু হবে এবং শেষ $length ভেরিয়েবল অপশনাল
//আমরা কয়টি ক্যারেকটার প্রিন্ট করব তা $length এ বলে দিতে পারি।
$string = "Hello Firends How are Your";
// echo substr($string, 0, 5); //This will print 'Hello' start from o index 'H' and then next 5 character 'Hello'   
// Print 6 index to last charcter.
// echo substr($string, 6);// We dont need to give any $length value. because we print until last char. 
// Print Last 4 character from string.
echo substr($string, -4);// it will show last four character because we start -4,-3,-2,-1.  -4(Y),-3(o),-2(u),-1(r) 
//---------------------------------------------------------------------------------

//strpos(string $haystack,mixed $needle,int $offset=0):int
//যখন আমরা একটি স্ট্রিং এর ভিতর আরেকটা স্ট্রিং খুজব তখন আমাদের strpos() ব্যবহার করতে হবে।
//strpos সাধারণত একটা পজিশন খুজে যদি পায় তাহলে পজিশন রিটার্ন করে। 
//আমাদের শুধু value দিয়ে চেক করলে হবে না। কারন 0 ইনডেক্স এ আমাদের স্ট্রিং সার্চ করতে পারি 
//তখন কিন্তু value 0 হওয়াতে false return করবে। 
$string = "PHP and Laravel course from Ostad";
$needle = "PHP";
$position = strpos($string, $needle);
echo $position;
//PHP is return true if 1 and 0 false.
//So 8 index found it's true. But if we serach "PHP" then it weill retun false!!!
//So we need to solution for 0 checking position. we will use type checking
if ($position !== false) {
    echo "Found";
} else {
    echo "Not Found";
}
//---------------------------------------------------------

//str_replace(string|array $search,string|array $replace,string|array $subject/inputstring,int $count):string
//যদি আমরা কোন একটা স্ট্রিং এর ভিতর একটি word replace করতে চাই তাহলে str_replace($serach,$replace,$string) 
//ব্যবহার করব।
$string = "PHP and Framework from Ostad";
$search = "Framework";
$replace = "Laravel";
$newString = str_replace($search, $replace, $string);
echo $newString . PHP_EOL;
//------------------------------------------------------------------
//If we want to replace multiple word from a string then we will use strtr() mean string translate.
$string2 = "Language and Framework from Ostad";
$newString2 = strtr($string2, [
    "Language" => "PHP",
    "Framework" => "Laravel"
]);
echo $newString2;
//------------------------------------------------------------
 //str_repeat is used to  repeat a string or character how much time.
  // $character='*';
   // for($i=10;$i>0;$i--){
  //   echo str_repeat($character,$i).PHP_EOL;
  // }
  //----------------------------------------------
  //explode() used for breaking word form sentences...
  //we use seperator or delimeter like "" for break word when this function 
  //found any "" into string.
  // $string="PHP and Laravel from Ostad Team";
  // $parts=explode(" ",$string);
  // echo count($parts);
  // // $parts=explode("o",$string);
  // print_r($parts);
  //-----------------------------------------
  //We use implode() to gather multiple word into a string sentences.
  // $stringParts=["PHP","&","Laravel","from","Ostad","Team"];
  // $newString=implode(" ",$stringParts);
  // echo $newString;
  //---------------------------------------
  //When use want to break a senetence/string into small parts of character
  //then we will use str_split(). which will break each character.
  // $string="Hello World";
  // $string="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
  // // $parts=str_split($string);
  // $parts=str_split($string,20); //breaking each 20 character.
  // print_r($parts);
  //---------------------------------------
