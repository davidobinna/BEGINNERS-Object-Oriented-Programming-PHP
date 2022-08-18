<?php

/**
 *
 */
interface Logger
{
    public function log(string $message):void;
}

 $logger = new class implements Logger {
   public function log(string $message):void
   {
     echo $message.'<br />' ;
   }
 };


function save (Logger $logger)
{
   $logger->log('This file was updated sucessfully');
}

save($logger);
 ?>
