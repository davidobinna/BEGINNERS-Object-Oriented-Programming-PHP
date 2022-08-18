<?php
spl_autoload_register(function ($class){
  echo 'Loading the class '.$class."<br/>";
  require $class .'.php';
});

class_exists('App\User');
echo "Create a new User "."<br />";


$user = new App\User();
echo $user->avartar();

 ?>
