<?php

interface Logger
{
  public function log($message);
}

class FileLogger implements Logger
{
    private $handler;
    private $logfilename;

    public function __construct($filename, $mode ='a')
    {
      $this->logfilename = $filename;
      //
      $this->handler = fopen($filename,$mode) or die ("Error: could not open log file");
    }

        public function log($message)
        {
          $message = date('F j, Y. g:i a').': '.$message." \n";
          fwrite($this->handler,$message);

          return $this;
        }
        public function __destruct()
        {
          if($this->handler){
              fclose($this->handler);
          }
        }
}
 ?>
<?php

class Database implements Logger
{
    public function log($message)
    {
      echo printf(" Log %s to the Database\n", $message);
    }
}




$loggeras = [
  new FileLogger('./log.txt'),
  new Database()
];

foreach ($loggeras as $value) {
    $value->log(' hello good people of nigeria');
}
 ?>
