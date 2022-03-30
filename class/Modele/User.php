<?php
//Modèle
class User{

  private $_nom;
  private $_prenom;
  private $_email;
  private $_mdp;

  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees){
    foreach ($donnees as $key => $value){
      $method = 'set'.ucfirst($key);

      if (method_exists($this, $method)){
  	// On appelle le setter.
        	$this->$method($value);
      }
    }
  }

  //setter
  public function setNom($nom){
    $this->_nom = $nom;
  }
  public function setPrenom($prenom){
    $this->_prenom = $prenom;
  }
  public function setEmail($email){
    $this->_email = $email;
  }
  public function setMdp($mdp){
    $this->_mdp = $mdp;
  }
  //getter
  public function getNom(){return $this->_nom;}
  public function getPrenom(){return $this->_prenom;}
  public function getEmail(){return $this->_email;}
  public function getMdp(){return $this->_mdp;}
}
?>
