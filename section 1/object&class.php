<?php
class BankAccount
{
public $accountNumber ;
public $balance ;
    public function deposite($amount){
       if ($amount > 0 ) {
          $this->balance += $amount;
       }
    }
    public function withdraw($amount){
      if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
      }
      return false;
    }
}

$account = new BankAccount();

$account->accountNumber = 1;
$account->balance = 100;

$account->deposite(200);

$amount->withdraw(50);

  ?>
