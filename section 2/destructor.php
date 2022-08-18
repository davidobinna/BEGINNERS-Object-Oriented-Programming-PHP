<?php
class File
{
   private $filename;
   private $pointer;

   public function __construct($filename, $mode = 'r')
   {
     $this->filename = $filename;
     $this->pointer = fopen($filename, $mode);
   }
   public function readFile()
   {
       return fread($this->pointer, filesize($this->filename));
   }
   public function __destruct()
   {
       if ($this->pointer) {
           fclose($this->pointer);
       }
   }
}


$filesystem = new File('./blid.asm');
echo $filesystem->readFile();
 ?>
