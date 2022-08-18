<?php
require 'savingsAcc.php';

$user1 = new SavingAccounts();
$user1->deposit(200);
//
$user1->setinterestRate(0.05);
//
$user1->addInterest();
echo $user1->getBalance();

echo "<br />";

$user2 = new SavingAccounts();
$user2->deposit(300);
//
$user2->setinterestRate(0.15);
//
$user2->addInterest();
echo $user2->getBalance();
 ?>
