<?php
declare(strict_types=1);

class Bankacount
{
   public float $balance = 0;

   public function __construct(float $balance)
   {
     $this->balance = $balance;
   }
}

$account = new Bankacount(10.50);
var_dump($account->balance);

 ?>
