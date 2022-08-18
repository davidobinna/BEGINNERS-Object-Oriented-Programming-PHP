<?php
class BankAccount
{
  private $balance;

  public  function getBalance()
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
