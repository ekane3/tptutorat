<!DOCTYPE html>
<html>
<head>
	<title>Listes des matieres</title>
	<link rel="icon" type="image/png" href="Images/3il.jpg" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mdb.min.css">
</head>
<body>
	<?php
		include("header.php");
		include("connexion.php");
		echo ' <br/>';
        echo ' <br/>';
        echo ' <br/>';
        echo ' <br/>';
	 ?>
	<div class="container">
	 	<div class="jumbotron">
	 		<h2><i class="fa fa-book"></i>Liste des matières</h2>
  			<p>La liste des matières et les enseignants respectifs:</p>
  			<p>Contacter un prof en cliquant sur son nom.<i class="fa fa-smile-o"></i></p>
	 	</div>
  		<table class="table table-hover">
  			<thead class="thead-light">
			    <tr class="text">
			    	<th>#</th>
			        <th>Matières</th>
			        <th>Enseignants</th>
			        <th>Num bureau</th>
			    </tr>
		    </thead>
		    <tbody>
		    	<?php
		    		$requete = $bdd->query(' SELECT intitule_matiere,nom_prof,prenom_prof,num_bureau FROM matiere INNER JOIN professeur where matiere.id_prof= professeur.id_prof order by intitule_matiere');
		    				$i=1;
		    				
  						while($data = $requete->fetch()){
  							echo'<tr>'
  									.'<td>'.$i.'</td>'
  									.'<td>'.$data['intitule_matiere'].'</td>'
  									.'<td><a href="#">'.$data['nom_prof'].' '.$data['prenom_prof'].'</a></td>'
  									.'<td>'.$data['num_bureau'].'</td>'
  								.'</tr>';
  								$i++;
  						 }		
		    	?>
			    </tr>
			</tbody>
  		</table>			 
	</div>
	 <?php
		 echo ' <br/>';
	     echo ' <br/>';
		include("footer.php");
	 ?>
</body>
</html>