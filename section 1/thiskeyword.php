<?php
class BankAccount
{
public $accountNumber ;
public $balance ;
    public function deposite($amount){
       if ($amount > 0 ) {
          $this->balance += $amount;
       }
       return $this;
    }
    public function withdraw($amount){
      if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
      }
      $this->balance =" Low balance ". 0;
      return false;
    }
}

$account = new BankAccount();

$account->accountNumber = 1;
$account->balance = 0;


$account->deposite(100)
        ->deposite(100)
        ->deposite(100)
        ->withdraw(100);

echo "acount balance: N ".$account->balance;
  ?>
