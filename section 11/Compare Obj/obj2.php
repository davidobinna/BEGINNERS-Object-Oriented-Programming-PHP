<?php

require 'point.php';

$p1 = new Point(10,20);
$p2 = $p1 ;

if ($p1 === $p2) {
     echo "p1 and p2 are indentical";
}else {
  echo "p1 and p2 are not indentical";
}

echo "<p></p><br />";

$p3 = new Point(10,20);

if ($p1 === $p3 ) {
   echo "p1 and p3 are indentical";
}else {
  echo "p1 and p3 are not indentical ";
}

 ?>
