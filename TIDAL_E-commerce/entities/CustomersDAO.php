<?php

require_once(PATH_MODELS.'DAO.php');
require_once(PATH_ENTITY.'Customers.php');
class ProductsDAO extends DAO{

  public function getCustomers(){
    $requete = "Select * from products";
    $data = $this->queryAll($requete);
    $i = 0;//compteur pour remplir le tableau d'objet
    if(empty($data) ){
      $CustTab = null;
    }else{
    foreach($data as $dat){//pour chaque ligne du tab a 2D
      $CustTab[]= new Customers($dat[0], $dat[1], $dat[2], $dat[3], $dat[4], $dat[5]);//on créé un objet dans ce tableau
      $i++;
    }
  }
    return ($CustTab);
  }
}

?>