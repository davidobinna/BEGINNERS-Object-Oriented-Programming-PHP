<?php
class Bankacount
{
  private $balance;

  public function __construct($balance)
  {
    $this->balance = $balance;
  }

  public function getBalance()
  {
    return $this->balance;
  }

  public function deposit($amount)
  {
     if ($amount > 0) {
           $this->balance += $amount;
     }
     return $this;
  }
}

 ?>
