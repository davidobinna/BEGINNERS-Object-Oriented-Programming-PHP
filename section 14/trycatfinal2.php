<?php
function divide($x, $y)
{
   try {
            $result = $x / $y;
   } catch (\Exception $e) {
       return null;
   }finally{
     return null;
   }

}

$result = divide(10,2);
var_dump($result);
 ?>
