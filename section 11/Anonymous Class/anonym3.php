<?php
/**
 *
 */
interface Logger
{
  public function log(string $message): void;
}


///***
abstract class SimpleLogger implements Logger
{
    protected $newline;

    public function __construct(bool $newline)
    {
      $this->newline = $newline;
    }
    abstract public function log(string $message): void;
}

$logger = new class(true) extends SimpleLogger{
  public function __construct(bool $newline)
  {
      parent::__construct($newline);
  }
  public function log(string $message):void
  {
    echo $this->newline ? $message. PHP_EOL: $message;
  }
};

$logger->log('Hello world');
$logger->log('bye');
 ?>
