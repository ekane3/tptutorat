<!DOCTYPE html>
<html>
<head>
	<title>Donnez un avis</title>
	<link rel="icon" type="image/png" href="Images/3il.jpg" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php
		include("header.php");
		echo ' <br/>';
        echo ' <br/>';
        echo ' <br/>';
        echo ' <br/>';
	 ?>
	<div class="container">
	 	
	 	<h3 id="form3"><u>Formulaire d’avis</u></h3>
	 	<div class="row">
	 		<div class="col-lg-6">
	 			<form class="form align-center" method="post" action="avisPost.php">
	 			Sur qui voulez-vous faire un avis ?<br><br>
				  <div class="form-group">
				    <label>Nom du tuteur/étudiant</label>
				    <input type="text" class="form-control" name="nom" id="" placeholder="Nom du tuteur ou étudiant">
				  </div>
				<div class="form-group">
					<label for="avis_tuteur">Entrez les commentaires</label>
					<textarea class="form-control" id="avis_tuteur"name="comment" rows="6"></textarea>
				</div>
				<div class="form-row">
					<div class="form-group">
				  	<button type="submit" name= "avis" class="btn btn-primary">Envoyer</button>
				  	<button type="reset" class="btn btn-danger">Effacer</button>
				</div>
				</div>
				
			</form>
	 		</div>

	 		
	 	
	 	</div>
	 	
	 </div>
	 <?php
	    
	     echo ' <br/>';
	     echo ' <br/>';
	     echo ' <br/>';
	     echo ' <br/>';
	     echo ' <br/>';
	     echo ' <br/>';
		include("footer.php");
	 ?>
</body>
</html>