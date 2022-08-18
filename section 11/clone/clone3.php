<?php
class Address
{
    public $street;

    public $city;

}

class Person
{
  public $name;

  public $address;

  public function __construct($name)
  {
    $this->name = $name;
    $this->address = new Address;
  }
public function __clone()
{
   $this->address = clone $this->address;
   }
}

$bob = new Person('Bob');
$bob->address->street = 'North 1st Street';
$bob->address->city = 'San joe';
var_dump($bob);
//
echo " <p></p><br/>";
//
$alex = clone $bob;
$alex->name = 'Alex';
 $alex->address->street = '1 Apple Park way';
 $alex->address->city = 'Cupertino';
  var_dump($alex);
echo " <p></p><br/>";

  var_dump($bob);
 ?>
