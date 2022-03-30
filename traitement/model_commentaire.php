<?php
require_once 'manager_commentaire.php';
require_once 'traitement_commentaire.php';
class model_commentaire { //Déclaration de la classe inscription
//Déclaration des attributs
  protected $_Avis;
  protected $_Note;

  public function __construct($Avis, $Note)
  {
//Partie setter
      $this->setAvis($Avis);
      $this->setNote($Note);
}


public function setemail($Avis){
  if(empty($Avis)){
    trigger_error('la variable doit etre remplie');
    return;
  }
  $this->_Avis = $Avis;
}
public function setNote($Note){
  if(empty($Note)){
    trigger_error('la variable doit etre remplie');
    return;
  }
  $this->_Note = $Note;
}

//Partie Getter

public function getAvis(){
  return $this->_Avis;
}
public function getNote(){
  return $this->_Note;
}

}
?>
