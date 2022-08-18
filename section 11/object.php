<?php
//header('Content-Type: text/plain');
require 'Filereader.php';

$filename = 'object.dat';
//
file_put_contents($filename,serialize(new FileReader('./blind.txt')));
echo "Done";
//

?>
