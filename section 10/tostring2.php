<?php
declare (strict_types = 0);
class Quarter
{
  private $number;

  public function __construct($number)
  {
      if ($number < 0 && $number > 4) {
        throw new \InvalidArgumentException("Quater must be between 0 and 4");
      }
      $this->number = $number;
  }
    public function __toString():string
    {
      return $this->number;
    }
}
$quarter = new Quarter(2);
echo $quarter ;
 ?>
