 <!DOCTYPE html>
<html>
<head>
	<title>Connectez-vous</title>
	<link rel="icon" type="image/png" href="Images/3il.jpg" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php
		include("header.php");
		include("connexion.php");
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		
	?>
	<div class="container">
	 	<div class="row">
	 		<div class="col-lg-3"> 
	 		</div>
	 		<div class="col-lg-6"> 
	 		<h3 class="text-center"><i class="fa fa-user"></i> Connectez-Vous</h3><hr><br>
	 		<form class="form" action="loginpost.php" method="post" autofocus>		 			
				<div class="form-group">
				    <label>Entrez votre login : </label>
				    <input type="text" name="login" class="form-control" id="nom" placeholder="Votre nom" autofocus="autofocus">
				</div>
				<div class="form-group">
				   <label>Entrez votre mot de passe :</label>
				   <input type="password" name="pass" class="form-control" id="password" placeholder="Mot de passe">
				</div>
				<br>
				<div class="form-row">
					<div class="form-group col-lg-2">
					</div>
					<div class="form-group col-lg-4">
						<button type="submit" class="btn btn-primary btn-block" name="connecter" align="center">Se connecter</button>
					</div>
					<div class="form-group col-lg-4">
				  	<button type="reset" class="btn btn-danger btn-block" >Annuler</button>
					</div>
					<div class="form-group col-lg-2">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-lg-2">
					</div>
					<div class="form-group col-lg-8">
							<?php
			 			if (isset($_POST['connecter']) AND isset($return)) 
			 				echo "<h4>okok".$return."</h4>";
						 ?>
		  				Vous n'avez pas de compte ?<a href="inscription.php" class="alert-link"> <u>Inscrivez-vous ici</u></a>.
					</div>
					<div class="form-group col-lg-2">
					</div>
				</div>
			</form>
	 		</div>
	 		<div class="col-lg-3"> 
	 		</div>	
	 	</div><br><br>
				<!--<?php
	 				if (isset($_POST['connecter']) AND isset($return)) 
	 					echo '<div class="alert alert-danger" role="alert">'.$return.'<br>';
	 					echo 'Vous n\'avez pas de compte ?<a href="inscription.php" class="alert-link">Inscrivez-vous ici</a>';
	 					echo '</div>';
	 			?>	-->	
	</div>
	<?php
		include("footer.php");
	 ?>
</body>
</html>