<!DOCTYPE html>
<html>
<head>
	<title>Page d'accueil</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
       <!--formulaire de connection-->
        <hr>
        <?php 
        if(isset($return) )
        	echo $return ;
        ?>
        <form action="loginPost.php" method="POST">
                <br> <input type="email" name="email" placeholder="votre e-mail"><br>
                <br> <input type="password" name="mdp" placeholder="votre mot de passe"><br>
                <br><input type="submit"  name="login" value="Se connecter"><br>        
        </form> 

        <a href="inscription.php">Creer un compte</a>


</body>
</html>