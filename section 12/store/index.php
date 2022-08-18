<?php
require 'src/Utils/Logger.php';
require 'src/Database/Logger.php';

use Store\Utils;
use Store\Database;

$logger = [
  new Utils\Logger(),
  new Database\Logger()
];

foreach ($logger as $logger) {
   $logger->log(' HELLO WORLD ');
}
 ?>
