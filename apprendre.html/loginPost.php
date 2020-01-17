<?php
session_start();
 include('connexion.php');
//Formulaire de connexion
if(isset($_POST['login'])){
	$email =$_POST['email'];
    $mdp =$_POST['mdp'];
    if(!empty($email)AND !empty($mdp)){
    	$VerifUser =$bdd->query('SELECT id FROM users WHERE email ="'.$email.'" AND mdp ="'.$mdp.'"');
    	$UserData =$VerifUser->fetch(); //fetch() retourne sous un tableau les valeurs 
  if($VerifUser->rowCount() ==1){    //rtourne le nbre d'entré que la requete retourne
  	$_SESSION['connecté'] = $UserData['id']; // id parce que dans la requete jai juste selectionné 'id'
  	$return = "vous etes bien connecté !";
  	//header("Location: index.php");
  	
  }else
   {
            header("Location: index.php");
           $return ="Les identifiants sont invalides.";
 
  }
 

    }else
     header("Location: index.php");
     $return ="un ou plusieurs champs manquant.";
}
?>