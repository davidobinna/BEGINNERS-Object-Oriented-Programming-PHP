<?php

/**
 *
 */
interface Greeting
{
   public function greet();
}

class English implements Greeting
{
  public function greet()
  {
    return ' Hello ';
  }
}

class German implements Greeting
{
  public function greet()
  {
    return ' Hello ';
  }
}

function greeting($greeting)
{
  foreach ($greeting as $value) {
     echo $value->greet(). "<br >";
  }
}

$greeters = [
  new English(),
  new German()
];

greeting($greeters);

?>
