<?php

class NumericException extends Exception{ }

try {
function divide($x,$y)
{
   if (!is_numeric($x) || !is_numeric($y)) {
       throw new \NumericException("$y and $x: ");
   }
   return $x/$y;
}

echo divide(100, 'a');

} catch (\NumericException $e) {
   echo " bOTH Values must be numeric ". $e->getMessage();
   exit();
}

?>
