<?php

class Customer
{
  private $id;

  private $name;

  private $email;

  public function __construct(int $id, string $name, string $email)
  {
     $this->id = $id;
     $this->name = $name;
     $this->email = $email;
  }
  public function getInitial()
  {
     if ($this->name !== '') {
        return strtoupper(substr($this->name,0,1));
     }
  }
}

 ?>
