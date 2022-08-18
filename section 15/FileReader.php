<?php

class FileReader
{
   private $filename;

   public $done;

   protected $filesize;

   public static $mimeTypes;
}
var_dump(property_exists(FileReader::class,'filename'));
echo "<p></p>";
var_dump(property_exists(FileReader::class,'filename'));
echo "<p></p>";
var_dump(property_exists(FileReader::class,'status'));
echo "<p></p>";
var_dump(property_exists(FileReader::class,'filename'));
 ?>
