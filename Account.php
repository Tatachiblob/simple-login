<?php
class Account{
  public $username;
  public $password;

  public function __construct($username, $password){
    $this->username = $username;
    $this->password = $password;
  }

  public function isSame($accounts){
    foreach($accounts as $acc){
      if($acc->username == $this->username && $acc->password == $this->password){
        return true;
      }
    }
    return false;
  }
}
?>
