<?php
require 'point.php';

$p1 = new Point(10,20);
$p2 = new Point(10,20);

if ($p1 == $p2) {
  // code...
  echo "p1 and p2 are equal.";
}else {
  echo "p1 and p2 are not equal";
}

echo "<p></p><br />";

$p3 = $p2;

if ($p2 == $p3 ) {
   echo "p2 and p3 are equal";
}else {
  echo "p2 and p3 are not equal";
}

echo "<p></p><br />";

$p4 = new Point(20,10);

if ($p3 == $p4) {
   echo "p3 and p4 are equal";
}else {
  echo "p3 and p4 are not equal";
}

 ?>
