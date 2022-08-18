<?php
class Robot
{
  public function greet()
  {
    return 'Hello!';
  }
  final public function Id()
  {
    return uniqid();
  }
}

class Android extends Robot
{
  public function greet()
  {
     $greeting = parent::greet();
     return $greeting . " From Andriod.";
  }

  public function Id()
  {
    return uniqid(' Andriod-');
  }
}

$android = new Android();
echo $android->greet();
 ?>
