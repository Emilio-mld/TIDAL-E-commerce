<?php

class Customers
{
    
private $id;
private $firstname;
private $name;
private $address;
private $usr;
private $pwd;

function __construct($id, $firstname, $name, $address, $usr, $pwd){
  $this->id = $id;
  $this->firstname = $firstname;
  $this->name = $name;
  $this->address = $address;
  $this->usr = $usr;
  $this->pwd = $pwd;
}

public function getId(){
  return $this->id;
}

public function getFirstname(){
  return $this->firstname;
}

public function getName(){
  return $this->name;
}

public function getAddress(){
  return $this->address;
}

public function getUsr(){
    return $this->usr;
}

public function getPwd(){
    return $this->pwd;
}

}
 ?>