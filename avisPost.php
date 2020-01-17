<?php
session_start();
//Connexion a la Base de donnée
	include('connexion.php');
//Gestion de formulaire d'avis
	$nom_tuteur =  $_POST['nom_tuteur'];
if(isset($_POST['avis'])){

if(!empty($_SESSION['nom_tuteur']) AND !empty($_SESSION['com_avis']) ) )){
	$user =$bdd -> query('SELECT nom FROM utilisateur WHERE nom ="'.$_SESSION['login'].'"');
		if($user -> rowCount() < 1 ){
            $bdd->query('INSERT INTO avis (commentaires,nom) VALUES ("'. $_POST['com_avis'].'","'.$_SESSION['nom'].'")');
            header('Location: avis.php ');    
            $return = "Vous venez de donner un avis sur :".$nom_tuteur;        
}
}else
	header('Location: avis.php ');
?>