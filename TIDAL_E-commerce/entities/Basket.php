<?php
class Basket
{
    
private $custId;
private $prodId;
private $quantité;

function __construct($custId, $prodId, $quantité){
  $this->custId = $custId;
  $this->prodId = $prodId;
  $this->quanId = $quanId;
}

public function getCustid(){
  return $this->id;
}

public function getProdid(){
  return $this->firstname;
}

public function getQuantité(){
  return $this->quantité;
}

}
 ?>