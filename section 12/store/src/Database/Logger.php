<?php
namespace Store\Database;


class Logger
{
  public function log($message)
  {
    var_dump('Log '.$message.' to database');
  }
}

 ?>
