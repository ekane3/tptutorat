<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	  <!--formulaire d'insription-->
	
	<hr>      
<?php
 if(isset($_POST['inscription']) AND isset($return) )
        	echo $return ;

?>
	<form action="inscriptionPost.php" method="POST">
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
                <input type="reset" value="Effacez">   
        </form> 
</body>
</html>