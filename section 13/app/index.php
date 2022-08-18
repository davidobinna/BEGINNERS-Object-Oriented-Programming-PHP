<?php
require_once 'function.php';


$contact = new Contact('davidobinna@gmail.com');
echo Email::send($contact);
 ?>
