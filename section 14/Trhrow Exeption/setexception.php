<?php

class ExceptionHanlder
{
   public static function handle(Exception $ex)
   {
       //
   }
}

$handler = new ExceptionHanlder();
set_exception_handler(['ExceptionHanlder','handle']);
 ?>
