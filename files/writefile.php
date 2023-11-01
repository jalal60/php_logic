<?php
$filename = "./data.txt";
$fp = fopen($filename, 'a');
$data = "This is Line Four" . "\n";
fwrite($fp, $data);
fclose($fp);
