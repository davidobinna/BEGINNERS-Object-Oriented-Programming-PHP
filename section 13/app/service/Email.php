<?php
class Email
{
  public static function send($contact)
  {
      return 'Sending and Email to '.$contact->getEmail();
  }
}

 ?>
