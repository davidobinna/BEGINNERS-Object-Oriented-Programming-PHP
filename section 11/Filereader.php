<?php
class FileReader
{
  private $filehandle;

  private $filename;

  public function __construct(string $filename)
  {

    $this->filename = $filename;
    $this->open();
  }
  private function open()
  {
    $this->filehandle = fopen($this->filename,'r');
    return $this;
  }
  public function read()
  {
    $contents = fread($this->filehandle, filesize($this->filename));
    return nl2br($contents);
  }
  public function close()
  {
    if ($this->filehandle) {
        fclose($this->filehandle);
    }
  }

  public function __sleep():array
  {
      $this->close();
      return array('filename');
  }
  public function __wakeup():void
  {
     $this->open();
  }
}


 ?>
