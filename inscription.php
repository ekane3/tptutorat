<!DOCTYPE html>
<html>
<head>
	<title>Les formulaires</title>
	<link rel="icon" type="image/png" href="Images/3il.jpg" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<!--<link rel="stylesheet" type="text/css" href="css/mdb.min.css">-->
</head>
<body>
	<?php
		include('header.php');
		echo ' <br/>';
		echo ' <br/>';
		echo ' <br/>';
		echo ' <br/>';
		?>
		<h3 class="text-center">Veuillez remplir les champs</h3><hr><br>
	 <div class="container">
	 	<div class="row">
	 		<div class="col-lg-3">
	 	
	 		</div>
	 		<div class="col-lg-7"> 
	 		<form class="form" action="inscriptionpost.php" method="post" autofocus>
	 			<div class="form-row">
				    <div class="form-group col-md-6">
				      <label>Nom</label>
				      <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer votre Nom" autofocus="autofocus" required>
				    </div>
				    <div class="form-group col-md-6">
				      <label>Prenom</label>
				      <input type="text" class="form-control" id="Prenom" name="prenom" placeholder="Entrez votre prenom" required>
				    </div>
				</div>
				  <div class="form-row">
				    <div class="form-group col-md-3">

				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputPassword">Password</label>
				      <input type="password" class="form-control" name="password" id="password" placeholder="Entrer votre mot de passe" required>
				    </div>
				      <div class="form-group col-md-3">
				    	
				    </div>
				  </div>
				  
				  	<div class="form-row">
				  		<div class="form-group  col-lg-6">
				  			<label class="text-center">Login</label>
				      		<input type="text" class="form-control" name="login"  placeholder="Login" required>
				  		</div>	
				  		<div class="form-group col-lg-6"> 
				  			<label>Categorie</label>
						    <select name="options" class="form-control" required>
							    <option selected>Choisissez...</option>
							    <option value="etudiant">Etudiant </option>
							    <option value="prof">Professeur</option>
						    </select>
				  		</div>  		
				  	</div>
				  	<div class="form-row show" id="show" style="display: none;">
				  		<div class="form-group  col-lg-6">
				  			<label class="text-center">Entrer votre matière dispensée</label>
				      		<input type="text" class="form-control" name="matiere" placeholder="matiere" required>
				  		</div>	
				  		<div class="form-group col-lg-6"> 
				  			<label>Numéro du bureau</label>
						    <input type="number" class="form-control" name="bureau" placeholder="Bureau N°" required>
				  		</div>  		
				  	</div>
				  <br>
				  <div class="form-row">
				  	<div class="form-group col-lg-2">
				  		
				  	</div>
				  	<div class="form-group col-lg-4">
				  		<button type="submit" name="inscription" class="btn btn-primary">Sign in</button>
				  	</div>
				  	<div class="form-group col-lg-4">
				  		<button type="reset" class="btn btn-danger">Annuler</button>
				  	</div>
				  	<div class="form-group col-lg-2">
				  		
				  	</div>
				  </div>
				
			</form>
	 		</div>
	 		<div class="col-lg-2">
	 	
	 		</div>	
	 	</div><br><br>
	 </div>
	 <?php
		 echo ' <br/>';
	     echo ' <br/>';
		include("footer.php");
	 ?>
	 <script type="text/javascript">
	 	$(document).ready(function(){
	 		$('select[name="options"]').on('change',function(){
				if($(this).val().trim() == "prof"){
					$('#show').show();
				}else{
					$('#show').hide();
				}
			});
		});
	</script>
</body>
</html>
