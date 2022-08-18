<?php
$logger = new class{
    public function log(string $message):void
    {
       echo $message;
    }
};


$logger->log('Hello');
echo "<br />";
echo get_class($logger);
 ?>
