<?php
class Str
{

    private static $method = [
      'upper' => 'strtoupper',
      'lower' => 'strtolower',
      'len'  => 'strlen'
    ];

  public static function __callstatic(string $method, array $param)
  {
    if (!array_key_exists($method, self::$method)) {
         throw new \Exception("The ".$method."  is not supported");
    }
    return call_user_func_array(self::$method[$method],$param);
  }

}


echo Str::lower('Hello')."<br/>";
echo Str::upper('Hello')."<br/>";
 ?>
