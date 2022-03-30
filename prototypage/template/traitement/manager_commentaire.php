<?php
require_once 'model_commentaire.php';
require_once 'traitement_commentaire.php';
class commentaire{ //Déclaration de la classe Manager
public function commentaire($donnee)
{

    $bdd=new PDO('mysql:host=localhost;dbname=cinemapoo;charset=utf8', 'root', ''); //Connexion à la BDD
    $req=$bdd->prepare('INSERT into skyfall (Avis, Note) VALUES(:Avis, :Note)'); //Préparation de la table commentaire avec les valeurs de la table
    $req->execute(array('Avis'=>$donnee->getAvis(), 'Note'=>$donnee->getNote())); //Execution des requêtes à travers un tableau
    $a = $req->fetch();
	//Conditions de redirection
    if ($a ==true)
    {
     header("location: moviesingle.html"); //redirection vers moviesingle.html
   }
    else
    {
     header("location: index.html"); //Redirection vers index.html
    }

    }
}

?>
