<?php

class person
{
    public $name;

    public function __construct($name)
    {
      $this->name = $name;
    }
}

$bob = new person('Bob');
//

$alex = clone $bob;
$alex->name ='Alex';

//
var_dump($bob);
var_dump($alex);
 ?>
