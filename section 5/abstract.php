<?php
abstract class Dumper
{
   abstract public function dump($data);
}

class WebDumper extends Dumper
{
  public function dump($data)
  {
    echo '<pre>';
    var_dump($data);
    echo '<pre>';

  }
}


class ConsoleDumper extends Dumper
{
      public function dump($data)
      {
        var_dump($data);
      }
}

 ?>
