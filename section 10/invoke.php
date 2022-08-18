<?php

class Myclass
{
  public function __invoke()
  {
    echo "Called to __involk method ";
  }
}
$instance = new Myclass();
$instance();

echo is_callable($instance) ? 'yes':'no';
 ?>
