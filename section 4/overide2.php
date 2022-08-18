<?php

class BankAccount
{
  private $balance;

  public function __construct($amount)
  {
    $this->balance = $amount;
  }

  public function getBalance()
  {
    return $this->balance;
  }

  public function deposit($amount)
  {
    if ($amount > 0 ) {
      // code...
      $this->balance += $amount;
    }
     return $this;
  }

  public function withdraw($amount)
  {
      if ($amount > 0 && $amount <= $this->balance) {
          $this->balance -= $amount;
          return true;
      }
      return false;
  }
}



/**
 *
 */
class Checkaccount extends BankAccount
{
   private  $minBalance;

   public function __construct($balance,$minBalance)
  {
      if ($balance > 0 && $balance >= $minBalance) {
           parent::__construct($balance);
           $this->minBalance = $minBalance;
      } else {
           throw new \InvalidAmountException(" Balance amount must be greater than minimum balance");
      }
  }

  public function getmin()
  {
    return $this->minBalance;
  }

  public function withdraw($amount)
  {
    $canWithdraw =($amount > 0 && $this->getBalance() - $amount >= $this->minBalance )? true:false;
     if ($canWithdraw) {
         parent::withdraw($amount);
         return true;
     }
     return false;
  }
}


$user = new Checkaccount(1000,500);

if ($user->withdraw(80)) {
  echo "withdrawed: balance reamain ".$user->getBalance();
  exit();
}else {
    echo " Insufficient funds: cannot withdraw more than ".$user->getmin();
}

 ?>
