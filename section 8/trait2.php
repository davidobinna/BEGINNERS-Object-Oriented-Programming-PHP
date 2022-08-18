<?php

/**
 *
 */
trait Reader
{
  public function read ($source)
  {
    // code...
    echo sprintf(' Read from %s <br/>',$source);
  }
}

/**
 *
 */
trait Writer
{
   public function write($destination)
  {
    // code...
      echo sprintf( ' write to %s ', $destination);
  }
}

/**
 *
 */
trait Copier
{
  use Reader, Writer;

   public function copy($source,$destination)
  {
    // code...
    $this->read($source);
    $this->write($destination);
  }
}


class FileUtil
{
   use Copier;

   public function copyfile($source,$destination)
   {

     $this->copy($source,$destination);
   }
}



 $object = new FileUtil();
 $object->copyfile('File one','File2');
 ?>
