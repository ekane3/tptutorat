<!DOCTYPE html>
<html>
<head>
	<title>Affichage des séances(plannings)</title>
	<link rel="icon" type="image/png" href="Images/3il.jpg" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php
		include("header.php");
		include("connexion.php");
		echo ' <br/>';
        echo ' <br/>';
        echo ' <br/>';
	 ?>
		<div class="container">
		 <h4><i class="fa fa-table"></i>Séances</h4>
		<form class="form">
			<select id="groupe"  name="groupe" class="">
				<option selected>Choisissez Votre matière </option>
				<?php
		    		$requete = $bdd->query(' SELECT intitule_matiere FROM matiere ORDER BY intitule_matiere');
  						while($data = $requete->fetch()){
  							echo'<tr>'
  									.'<option>'.$data['intitule_matiere'].'</option>'
  								.'</tr>';
  						 }		
		    	?>				
	 		</select>
		 	
		</form>
		
		<h2 class="text-center">Semaine 1</h2><br>
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-striped table-hover">
					<thead class="thead-gray">
						<tr>
						<th>Horaire</th>
						<th>Lundi</th>
						<th>Mardi</th>
						<th>Mercredi</th>
						<th>Jeudi</th>
						<th>Vendredi</th>
						<th>Samedi</th>
					</tr>
					</thead>
					
					<tr>
						<?php
		    			$requete = $bdd->query(' SELECT s.horaire_seance as horaire FROM seance as s INNER JOIN groupe as g ON g.id_groupe=s.id_groupe INNER JOIN matiere as m ON g.id_matiere=m.id_matiere');
  						while($data = $requete->fetch()){
  							echo'<tr>'
  									.'<th>'.$data['horaire'].'</th>'
  								.'</tr>';
  						 }		
		    			?>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
					</tr>
					<tr>
						<th>
							10h00 - 12h00
						</th>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
					</tr>
					<tr>
						<th>
							10h00 - 12h00
						</th>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
					</tr>
					<tr>
						<th>
							10h00 - 12h00
						</th>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
					</tr>
				</table>
			</div>
		</div><hr>
		<h2 class="text-center">Semaine 2</h2><br>
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-striped table-hover">
					<thead class="thead-gray">
						<tr>
						<th>Horaire</th>
						<th>Lundi</th>
						<th>Mardi</th>
						<th>Mercredi</th>
						<th>Jeudi</th>
						<th>Vendredi</th>
						<th>Samedi</th>
					</tr>
					</thead>
					
					<tr>
						<th>
							8h00 - 10h00
						</th>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
					</tr>
					<tr>
						<th>
							10h00 - 12h00
						</th>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
					</tr>
					<tr>
						<th>
							10h00 - 12h00
						</th>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
					</tr>
					<tr>
						<th>
							10h00 - 12h00
						</th>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
					</tr>
				</table>
			</div>
		</div><hr>

		<h2 class="text-center">Semaine 3</h2><br>
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-striped table-hover">
					<thead class="thead-gray">
					<tr>
						<th>Horaire</th>
						<th>Lundi</th>
						<th>Mardi</th>
						<th>Mercredi</th>
						<th>Jeudi</th>
						<th>Vendredi</th>
					</tr>
					</thead>
					
					<tr>
						<th>
							8h00 - 10h00
						</th>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
					</tr>
					<tr>
						<th>
							10h00 - 12h00
						</th>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
					</tr>
					<tr>
						<th>
							10h00 - 12h00
						</th>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
					</tr>
					<tr>
						<th>
							10h00 - 12h00
						</th>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
						<td>
						
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	 <?php
	    echo ' <br/>';
	     echo ' <br/>';
		 echo ' <br/>';
		include("footer.php");
	 ?>	
</body>
</html>
