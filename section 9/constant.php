<?php
class Circle
{
  private const PI = M_PI;

  private $radius ;

  public function __construct(float $radius)
  {
    $this->radius = $radius;
  }

  public function area(): float
  {
    return self::PI * $this->radius **2 ;
  }
}

$obj = new Circle(3.6);
echo $obj->area();



abstract class Model
{
  protected const TABLE_NAME = '';

  public static function all()
  {
    return 'SELECT * FROM '.static::TABLE_NAME;
  }
}

/**
 *
 */
class User extends Model
{
 protected const TABLE_NAME ='users';
}


class Role extends Model
{
  protected const TABLE_NAME = 'roles';
}



echo User::all();
echo Role::all();
 ?>
