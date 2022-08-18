<?php
$data = [];

$fp = fopen('example.asm','r');

if (!$fp) {
    echo "The file is not accessible";
    exit;
}

do {
      $row = fgets($fp);
      if ($row === null) {
         echo "The stream is invalid";
         exit;
      }
      if ($row === false) {
         echo "Other errors occurred";
         exit;
      }
      $data[] = $row;
} while ($row);
//
if (!$fp) {
   fclose($f);
}
print_r($data);
 ?>
