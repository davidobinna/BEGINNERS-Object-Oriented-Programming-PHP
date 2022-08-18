<?php

class Customer
{
      protected $name;

      public function __construct($name)
      {
        $this->name = $name;
      }
      protected function format()
      {
        return ucwords($this->name);
      }

      public function getName()
      {
        return $this->format();
      }
}



class VIP extends Customer
{
   protected function format()
   {
     return strtoupper($this->name);
   }
}


$bob = new Customer('bob allen');
echo $bob->getName();
echo "<br />";

$alex = new VIP('alex ferguson');
echo $alex->getName();
 ?>
