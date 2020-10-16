<?php
class Products
{
private $identifiant;
private $name;
private $description;
private $price;

function __construct($id, $name, $description, $price){
  $this->identifiant = $id;
  $this->name = $name;
  $this->description = $description;
  $this->price = $price;
}

public function getId(){
  return $this->identifiant;
}

public function getName(){
  return $this->name;
}

public function getDescription(){
  return $this->description;
}

public function getPrice(){
  return $this->price;
}
}
 ?>