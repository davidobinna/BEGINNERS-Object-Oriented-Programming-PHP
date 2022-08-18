<?php

set_exception_handler(function (Exception $ex){
  //
   date_default_timezone_set('America/Los_Angeles');
   //
   $time = date('F j, Y, g:i a e O');
   //
   $message = " [{$time}] {$ex->getMessage()}\n";
   //
   error_log($message,3,'logs/errors.log');
   //
   echo "Whoops, looks like something went wrong";
});
 ?>
