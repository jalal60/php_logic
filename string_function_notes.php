<?php
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

