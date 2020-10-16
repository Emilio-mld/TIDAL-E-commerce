<?PHP
require_once(PATH_MODELS.'DAO.php');
require_once(PATH_ENTITY.'Products.php');
class ProductsDAO extends DAO{

  public function getProducts(){
    $requete = "Select * from products";
    $data = $this->queryAll($requete);
    $i = 0;//compteur pour remplir le tableau d'objet
    if(empty($data) ){
      $ProdTab = null;
    }else{
    foreach($data as $dat){//pour chaque ligne du tab a 2D
      $ProdTab[]= new Products($dat[0], $dat[1], $dat[2], $dat[3]);//on créé un objet dans ce tableau
      $i++;
    }
  }
    return ($ProdTab);
  }
}
