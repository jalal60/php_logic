<?php 
$marks=95;
echo "Marke=$marks";
echo PHP_EOL;
// To check Conversion store a variable $result
if($marks>=90){
  $result="A+";
}
else if($marks>=80){
  $result="A";
}
else if($marks>=70){
  $result="A-";
}
else if($marks>=60){
  $result="B";
}
else if($marks>=50){
  $result="C";
}
else if($marks>=33){
  $result="D";
}
else{
  $result="F";
}
echo "Grade=$result"; 
?> 
