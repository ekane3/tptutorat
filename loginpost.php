<?php
session_start(); 
try{
//Connexion a la base de données
	$login=$_POST['login'];
	$pass=$_POST['pass'];
	include('connexion.php');
	var_dump($_POST);
if(isset($_POST['connecter'])){//Quand il clique sur un bouton se connecter

	if ( isset($_POST['login']) && isset($_POST['pass']) ) {//verification des champs

		$st = $bdd->query("SELECT droits FROM utilisateur WHERE login='".$_POST['login']."' AND pass='".$pass."'");
		$datarow= $st->rowCount();
		$st->execute();
		$data = $st->fetch();

		if ($datarow ==1 ){//si on trouve un seul enregistrement dans la BD ca veut dire que l'utilisateur existe
		//Declaration de nos variables de connexion
	    	$_SESSION['login'] =$_POST['login'] ;
	    	$_SESSION['droits'] =$data['droits'] ;

	    		header("Location: matiere.php");
	   			$return = "vous etes bien connecté !";	    	
	    }else{
			header("Location: login.php");
	  		$return = "Vous n'avez pas de compte !";
		}

	}else{

		header("Location: login.php");//Si les champs sont vides on renvoie le formulaire
        $return ="Oops,un ou plusieurs champs manquant";
	}

}

}
catch(Exception $e)
{
     die('Erreur : '.$e->getMessage());
}

?>