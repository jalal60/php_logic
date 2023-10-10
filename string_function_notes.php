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

