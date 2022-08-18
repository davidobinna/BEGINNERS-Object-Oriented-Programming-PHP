<?php
/**
 *
 */
trait FileLogger
{
    public function log($message)
  {
    // code...
    echo "File Logger ".date('Y-m-d h:i:s').': '.$message ;
  }
}

/**
 *
 */
trait DatabaseLogger
{
  public function log($message)
  {
    // code...
    echo "DatabaseLogger ".date('Y-m-d h:i:s').': '.$message;
  }
}


trait EmailLogger
{
 public function log($message)
 {
   // code...
   echo "EmailLogger ".date('Y-m-d h:i:s').': '.$message;
 }
}


/**
 *
 */
class Logger
{
 use FileLogger,DatabaseLogger{
        DatabaseLogger::log as logtodatabe;
        FileLogger::log insteadof DatabaseLogger ;
   }
}

$logger = new Logger();
$logger->logtodatabe(" This is a test message #1");
echo " <br />";
$logger->log(" This is a test message #2 ");
echo " <br />";
 ?>
