<?php
require_once 'model_commentaire.php';
require_once 'manager_commentaire.php'; // importation des manager et model
$commentaire = new commentaire( $_POST["Avis"], $_POST["Note"]);  //fondation d'un objet commentaire pour importer les données du formulaire html
$co = new Manager();
$co->commentaire($commentaire);
?>
