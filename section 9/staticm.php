<?php
class App
{
  private static $app = null;

   private function __construct()
  {
     echo "Created and app port is...";
  }
  public static function get()
  {
         if (!self::$app) {
             self::$app = new App();
         }
         return printf(self::$app = 'error please set app to null');
  }
  public function sayHello():void
   {
   echo "Hello ....";
   }
}


$app= App::get();
 ?>
