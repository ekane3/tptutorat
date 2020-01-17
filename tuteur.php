<!DOCTYPE html>
<html>
<head>
	<title>Listes des Tuteurs</title>
	<link rel="icon" type="image/png" href="Images/3il.jpg" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
</head>
<body>
	<?php
		include("header.php");
		include("connexion.php");
		echo "<br>";
		echo "<br>";
	echo "<br>";
  echo "<br>";
	?>

  <div class="container">
    <div class="jumbotron">
      <h2><i class="fa fa-leaf"></i>Liste des tuteurs</h2>
        <p>La liste des tuteurs et leurs matières dispensées respectives:</p>
        <p>Vous pouvez laisser un avis sur un tuteur juste en cliquant sur l'icone commenter.<i class="fa fa-smile-o"></i></p>
    </div>
      <table class="table table-hover">
        <thead class="thead-light">
          <tr class="text">
            <th>#</th>
            <th>Matières</th>
            <th>Tuteurs</th>
            <th>Voir groupe</th>
            <th>Avis</th>
          </tr>
        </thead>
        <tbody>
          <form method="post" action="">
          <?php
            $requete = $bdd->query(' SELECT m.intitule_matiere as matiere,e.nom_etudiant as nomtuteur,e.prenom_etudiant as prenomtuteur FROM groupe g INNER JOIN etudiant e ON g.id_etudiant_tuteur=e.id_etudiant INNER JOIN matiere m ON m.id_matiere = g.id_matiere ORDER BY matiere');
            $reqgrupe=$bdd->query('SELECT e.nom_etudiant as nom FROM recoit_soutien as r inner join etudiant as e on r.id_etudiant=e.id_etudiant where r.id_groupe=2');
          
            
            $i=1;
              while($data = $requete->fetch()){
                echo'<tr id=>'
                    .'<td>'.$i.'</td>'
                    .'<td><input type="text" name="matiere" value='.$data['matiere'].' readonly style="border:none; border-color:transparent;"></td>'
                    .'<td>'.$data['nomtuteur'].' '.$data['prenomtuteur'].'</td>'
                    .'<td><a data-name="<?php echo $data[\'matiere\'];?>" href="javascript:;" class="btn btn-info btn-sm btnClick"> Voir groupe</a></td>'//  <!-- Trigger the modal with a button -->
                    .'<td> <a href="avis.php"><i class="fa fa-comments"></i></a></td>'
                  .'</tr>';
                  $i++;
               }    
          ?>          
          </form>
      </tbody>
      </table> 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Liste des etudiants</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <table class="table table-hover">
        <thead class="thead-light">
          <tr class="text">
            <th>#</th>
            <th>Noms</th>
          </tr>
        </thead>
        <tbody>
          <?php
          try {
            $reqgroupe=$bdd->query('SELECT e.nom_etudiant as nom FROM recoit_soutien as r 
                                inner join etudiant as e on r.id_etudiant=e.id_etudiant 
                                inner join groupe as g on g.id_groupe=r.id_groupe
                                inner join matiere as m on m.id_matiere=g.id_matiere
                                where m.intitule_matiere like "%'.$_POST['matiere'].'" ');
            $i=1;
              while($data = $reqgroupe->fetch()){
                echo'<tr>'
                    .'<td>'.$i.'</td>'
                    .'<td>'.$data['nom'].'</td>'
                  .'</tr>';
                  $i++;
               }   
          } catch (Exception $e) {
            die('Erreur : '.$e->getMessage());
          }
           
          ?>
          </tbody>
      </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
        </div>
      </div>
      
    </div>
  </div>      
  </div>
 
 <script>
$('.btnClick').on('click',function(){
     var name = $(this).data('name');
//opening model using jquery
      $('#myModal').modal('show');
})
</script>
<?php
		 echo ' <br/>';
	     echo ' <br/>';
		include("footer.php");
	 ?>

</body>
</html>