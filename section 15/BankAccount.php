<?php
class BankAccount
{
   public function transferTo(BankAccount $other, float $amount)
   {
   }
   public static function compare(BankAccount $other):bool
   {
     return false;
   }
}

$account = new BankAccount();

$exist = method_exists(BankAccount::class,'compare');
var_dump($exist);
echo "<p></p>";

$exist = method_exists($account,'compare');
var_dump($exist);

 ?>
