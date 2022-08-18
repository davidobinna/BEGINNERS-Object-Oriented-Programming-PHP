<?php

class Str
{
  private $s = '';

  private $function = [
    'length' => 'strlen',
    'upper' => 'strtoupper',
    'lower' => 'strtolower'
  ];

public function __construct(string $s)
{
   $this->s = $s;
}
public function __call($method, $args)
{
      if (!in_array($method, array_keys($this->function))) {
           throw new \BadMethodCallException();
      }
      array_unshift($args,$this->s);
     //array_unshift($args,$this->s);
     return call_user_func_array($this->function[$method],$args);
   }
}


$string = new Str('Hello, world');
echo $string->upper().'<br />';
echo $string->length().'<br />';
echo $string->lower().'<br />';
 ?>
