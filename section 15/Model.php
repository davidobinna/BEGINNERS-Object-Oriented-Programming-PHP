<?php
abstract class Model
{
  public function load(array $data)
  {
    foreach ($data as $key => $value) {
        if (property_exists($this,$key)) {
            $this->key = $value;
        }
        var_dump($this->key);
    }
    return $this;
  }
}

class User extends Model
{
  private $username;

  private $email;

  private $password;
}

$user = new User();

 $user->load([
  'username'=>'john',
  'email'=>'davidobinna@gmail.com',
  'password'=>password_hash('Verysure$$11.',PASSWORD_DEFAULT),
]);
 ?>
