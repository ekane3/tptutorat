<?php
session_start();
//Connexion a la Base de donnée
	include('connexion.php');
//Gestion de formulaire d'inscription
if(isset($_POST['inscription'])){
	$_SESSION['prenom'] = $_POST['prenom'];
	$_SESSION['password'] = $_POST['password'];

if(!empty( $_POST['nom']) AND !empty($_SESSION['prenom']) AND !empty($_SESSION['email']) AND !empty($_SESSION['password']) AND !empty($_SESSION['categorie']) AND !empty($_SESSION['tel']) AND !empty($_SESSION['ville'])){
	
			$TestEmail = $bdd -> query('SELECT id FROM utilisateur WHERE email ="'.$_SESSION['email'].'"');
				if($TestEmail -> rowCount() < 1 ){
                     	 $bdd->query('INSERT INTO utilisateur (nom,prenom,categorie,email,password,Tel,ville) VALUES ("'. $_POST['nom'].'", "'.$_SESSION['prenom'].'","'.$_SESSION['categorie'].'","'.$_SESSION['email'].'","'.$_SESSION['password'].'","'.$_SESSION['tel'].'","'.$_SESSION['ville'].'")');
                    	  header('Location: login.php ');
                     	   
				}else 
				header('Location: inscription.php ');
				$return ="Un ou des champs manquants";			

}
}
?>