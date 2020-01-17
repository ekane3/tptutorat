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
                         $return ="Utilisateur crée";
						}else $return ="votre adresse email est déjà utilisée.";

				}else $return ="votre nom dépasse 50 caractère.";

			}"Le genre est invalide";

		}else $return ="les deux mots de passe ne correspondent pas";
	}

} else $return ="un ou plusieurs champs manquant.";

}

//Formulaire de connexion
if(isset($_POST['login'])){
	$email =$_POST['email'];
    $mdp =$_POST['mdp'];
    if(!empty($email)AND !empty($mdp)){
    	$VerifUser =$bdd->query('SELECT id FROM users WHERE email ="'.$email.'" AND mdp ="'.$mdp.'"');
    	$UserData =$VerifUser->fetch(); //fetch() retourne sous un tableau les valeurs 
  if($VerifUser->rowCount() ==1){    //rtourne le nbre d'entré que la requete retourne
  	$_SESSION['connect'] = $UserData['id']; // id parce que dans la requete jai juste selectionné 'id'
  	$return = "vous etes bien connecté !";
  }else $return ="Les identifiants sont invalides.";

    }else $return ="un ou plusieurs champs manquant.";
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Les formulaires</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="karl.css">
</head>

<body>
	          
	            <?php 
	             if(isset($_POST['inscription']) AND isset($return) ){
        	echo $return ;
        }  
        ?>
         <!--formulaire d'insription-->
	<form action="#" method="POST">
                <br> <input type="text" name="nom" placeholder="votre nom"><br>
                <br> <input type="text" name="prenom" placeholder="votre prénom"><br>
                <br> <input type="email" name="email" placeholder="votre e-mail"><br>
                <br> <input type="password" name="mdp" placeholder="votre mot de passe"><br>
                 <br> <input type="password" name="mdp2" placeholder="confirmer votre mot de passe"><br>
                 <select name="genre">
                 	<option value="h">Masculin</option>
                 	<option value="f">Féminin</option>
                 </select>
                <br><input type="submit"  name="inscription" value="M'inscrire"><br>        
        </form> 

	             <!--formulaire de connection-->
        <hr>
        <?php 
        if(isset($_POST['login']) AND isset($return) ){
        	echo $return ;
        }  
        ?>
        <form action="#" method="POST">
                <br> <input type="email" name="email" placeholder="votre e-mail"><br>
                <br> <input type="password" name="mdp" placeholder="votre mot de passe"><br>
                <br><input type="submit"  name="login" value="Se connecter"><br>        
        </form> 


</body>
</html>
