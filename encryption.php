<?php
$plainText = "Hello World";
//a replace with b, b replace with c and so on...
//First need to convert String to ASCII code. So we use for loop each character to ASCII
//The Ascii + any no. 
//Then New ASCII no to New String Which will be encryption
//Similar We Revert Descryption.
echo "Input: $plainText" . PHP_EOL;
echo "Encryption:";
for ($i = 0; $i < strlen($plainText); $i++) {
    $asci = ord($plainText[$i]);
    //echo $asci . " ";
    $asciEncript = $asci + 1;
    //  echo $asciEncript . " ";
    $ascitoStr = chr($asciEncript);
    echo $ascitoStr;
}
echo PHP_EOL;
$encrypText = "Ifmmp!Xpsme";
$descrpText = "";
echo "Description Text:";
for ($i = 0; $i < strlen($encrypText); $i++) {
    $ascidd = ord($encrypText[$i]);
    //echo $ascidd . " ";
    $asciDescript = $ascidd - 1;
    //echo $asciDescript . " ";
    $descrpText = chr($asciDescript);
    echo $descrpText;
}
