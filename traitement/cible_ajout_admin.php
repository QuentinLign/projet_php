<?php
  //Traitement des données entrées dans le form d'inscription
  require '../class/modele/User.php';
  require '../class/manager/Manager_User.php';
  session_start();

  //ajout dans la bdd
  $admin = new User(['nom'=>$_POST['nom'],
                    'prenom'=>$_POST['prenom'],
                    'email'=>$_POST['email'],
                    'mdp'=>$_POST['mdp']]);
  $ajout_admin = new Manager_User;
  $ajout_admin->inscrip_admin($admin);

?>
