<?php
include __DIR__ .'/Bankacount.php';

/**
 *
 */
class SavingAccounts extends BankAccount
{
  private $interestRate;

  public function setinterestRate($interestRate)
  {
    $this->interestRate = $interestRate;
  }
    public function addInterest()
    {
      $interest = $this->interestRate * $this->getBalance();
      //
      $this->deposit($interest);
    }
}

 ?>
