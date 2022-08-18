<?php
$data = [];

try {
     $fp = fopen('example.asm','r');
     do {
        $row = fgets($fp);
        $data[] = $row;
     } while ($row);
     print_r($data);
     fclose($fp);
} catch (\Exception $e) {
      echo $e->getMessage();
}
 ?>
