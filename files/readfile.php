<?php
$filename = "./data.txt";
$fp = fopen($filename, 'r'); //'r' read mode.
while ($line = fgets($fp)) {
        echo $line;
}
fclose($fp);
//Alternamtive read whole content of file by file_get_contents().
// $data = file_get_contents($filename);
// echo $data;
