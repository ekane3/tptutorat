<?php
session_start();
//Connexion a la Base de donnée
 include('connexion.php');

//formulaire d'inscription
if(isset($_POST['inscription'])){
	$nom =$_POST['nom'];
    $prenom =$_POST['prenom'];
    $email =$_POST['email'];
    $mdp =$_POST['mdp'];
    $mdp2 =$_POST['mdp2'];
    $genre =$_POST['genre'];
if(!empty($nom) AND !empty($prenom) AND !empty($email) AND !empty($mdp) AND !empty($mdp2) AND !empty($genre)){
	if(filter_var($email,FILTER_VALIDATE_EMAIL)){
		if($mdp==$mdp2){
			if($genre=="h" OR $genre =="f"){
				if(strlen($nom)<= 50){
					$TestEmail =$bdd -> query('SELECT id FROM users WHERE email ="'.$email.'"');
						if($TestEmail -> rowCount() < 1 ){
                         $bdd->query('INSERT INTO users (nom,prenom,genre,email,mdp) VALUES ("'.$nom.'", "'.$prenom.'","'.$genre.'","'.$email.'","'.$mdp.'")');
                         header('Location: index.php ');
                           $return ="Utilisateur crée";
						}else $return ="votre adresse email est déjà utilisée.";

				}else $return ="votre nom dépasse 50 caractère.";

			}"Le genre est invalide";

		}else $return ="les deux mots de passe ne correspondent pas";
	}

} else $return ="un ou plusieurs champs manquant.";

}
?>