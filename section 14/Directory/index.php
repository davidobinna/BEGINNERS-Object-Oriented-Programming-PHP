<?php
require 'boostrap.php';

function add($a, $b)
{
   if (!is_numeric($a) || !is_numeric($b)) {
        throw new \InvalidArgumentException("Both arguments must be numeric ");
   }
   return $a + $b;
}
echo add('HI','THERE');

 ?>
