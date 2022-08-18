<?php
class Userprofile
{
  public $username;
  public function __construct($var)
  {
    $this->username = $var;
  }
}

class User
{
  public $profile;
  public function setNumber(\Userprofile $var)
  {
    $this->profile = $var;
  }
}

//$a = new  Userprofile("david sunday");
$set = new User();
$set->setNumber(new Userprofile("david sunday"));
echo $set->profile->username;
 ?>
