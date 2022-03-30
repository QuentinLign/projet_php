<?php

//Traitement des données entrées dans le form de connexion
require '../class/Modele/User.php';
require '../class/Manager/Manager_User.php';
session_start();

//Vérification du compte dans la bdd
$donnee = new User(['email'=>$_POST['email'],
                    'mdp'=>$_POST['mdp']]);

$connexion = new Manager_User;
$connexion->connexion($donnee);

?>
