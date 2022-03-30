<?php
  //Traitement des données entrées dans le form d'inscription
  require '../class/modele/User.php';
  require '../class/manager/Manager_User.php';
  session_start();
  //Vérification du mdp
  if($_POST['mdp'] != $_POST['confirmmdp']){
    $_SESSION['erreur_inscr'] = "Erreur dans le mot de passe.";
    header('Location: ../view/form_inscription.php');
  }
  //ajout dans la bdd
  else{
    $inscription = new User(['nom'=>$_POST['nom'],
                    'prenom'=>$_POST['prenom'],
                    'email'=>$_POST['email'],
                    'mdp'=>$_POST['mdp']]);
    $inscrit = new Manager_User;
    $inscrit->inqcription($inscription);
  }

?>
