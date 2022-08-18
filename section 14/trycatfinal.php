<?php
$data = [];

try {
     $fp = fopen('data.csv','r');
     while ($row = fgetcsv($f)) {
            $data[] = $row;
     }
     fclose($fp);
} catch (\Exception $e) {
    echo $e->getMessage();
} finally {
    if ($fp) {
        fclose($fp);
        echo "File closed";
    }
}


 ?>
