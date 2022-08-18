<?php
class Model
{
  protected static $tableName = 'Model';

  public static function getTableName()
  {
    return static::$tableName;
  }
}

/**
 *
 */
class User extends Model
{
   protected static $tableName = 'User';
}
echo User::getTableName();
echo Model::getTableName();
 ?>
