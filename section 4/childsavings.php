<?php
include __DIR__.'/callparent.php';

/**
 *
 */
class ChildSavings extends Bankacount
{
    private $interestRate;

     public function __construct($balance, $interestRate)
   {

     parent::__construct($balance);

     $this->interestRate = $interestRate;
   }

   public function setinterestRate($interestRate)
  {
       $this->interestRate = $interestRate;
  }
    public function addinterestRate()
    {
      $interest = $this->interestRate * $this->getBalance();
      $this->deposit($interest);
    }
}



$user = new ChildSavings(100,0.05);

$user->addinterestRate();

$user->deposit(300);
echo $user->getBalance();
 ?>
