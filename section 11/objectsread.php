<?php
require 'Filereader.php';

$filename = 'object.dat';
//
$file = file_get_contents($filename);
$file_reader = unserialize($file);
echo $file_reader->read();
$file_reader->close();
 ?>
