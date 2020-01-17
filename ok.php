<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="bootstrap/js/jquery-3.4.1.min.js"></script>
<script>
	$(document).ready(function () {
		$('select[name="options"]').on('change',function(){
			if($(this).val().trim() == "prof"){
				$('#show').show();
			}
			else{
				$('#show').hide();
			}
});
	});


</script>
</head>
<body>
	<?php
		include("connexion.php");
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		
	echo $_SESSION['login'];
	print_r($_SESSION['droits']);
?>
<select name="options">
          <option value="">-Please select-</option>
          <option value="prof">professeur</option>
          <option value="etudiant">Etudiant</option>
        </select>


	<div id="show">
					<div class="form-group  col-lg-6">
				  			<label class="text-center">Entrer votre matière dispensée</label>
				      		<input type="text" class="form-control" name="matiere" placeholder="matiere" required>
				  		</div>	
				  		<div class="form-group col-lg-6"> 
				  			<label>Numéro du bureau</label>
						    <input type="number" class="form-control" name="bureau" placeholder="Bureau N°" required>
				  		</div>  		
				  	</div>

</body>
</html>
	<!--<table>
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<div class="container-fluid">
  <form>
    <div class="form-row mt-3">
      <div class="col-md-1 mb-2">
        <label for="id">Id:</label>
        <div>AL 123</div>
      </div>
      <div class="col-md-2 mb-3">
        <label for="date-ope">Date opération</label>
        <input type="text" class="form-control" id="date-ope" placeholder="01/01/2018" required>
      </div>
      <div class="col-md-2 mb-3">
        <label for="recurrence">Récurrence</label>
        <input type="text" class="form-control" id="recurrence" placeholder="Non récurrente" value="Non récurrente"
          required>
      </div>
      <div class="col-md-2 mb-3">
        <label for="repartition">Répartition</label>
        <input type="text" class="form-control" id="repartition" placeholder="Paritaire" value="paritaire" required>
      </div>
      <div class="col-md-2 mb-3">
        <label for="oi">OI</label>
        <input type="text" class="form-control" id="oi" placeholder="Pas d'OI" value="Non" required>
      </div>
    </div>
 
    <div class="form-row align-items-center">
      <div class="col-md-2 mb-3">
        <label for="nature">Nature</label>
        <input type="text" class="form-control" id="nature" placeholder="ACH" value="ACH" required>
      </div>
      <div class="col-md-2 mb-3">
        <label for="commerce">Commerce</label>
        <input type="text" class="form-control" id="commerce" placeholder="Commerce" required>
      </div>
      <div class="col-md-2 mb-3">
        <label for="famille">Famille</label>
        <input type="text" class="form-control" id="famille" placeholder="Alimentation" value="Alimentation" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="motif">Motif</label>
        <input type="text" class="form-control" id="motif" placeholder="Motif">
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="preuve" size="1" required>
        <label class="form-check-label" for="preuve">Preuve</label>
      </div>
    </div>
   
    <div class="mb-2">Payeurs</div>
    <div class="form-row mb-3 ml-3">
      <div class="col-md-2">Ident</div>
      <div class="col-md-1">Montant</div>
    </div>
    <div class="form-row align-items-center ml-3">
      <div class="col-md-2 mb-3">
        <select id="payeur1" class="form-control mr-3">
          <option selected>Alain</option>
          <option>Bernard</option>
          <option>Caisse commune</option>
        </select>
      </div>
      <div class="col-md-1 mb-3">
        <input type="text" class="form-control" id="montant" placeholder="0.00 €">
      </div>
      <button type="button" class="btn btn-primary mr-1 mb-3">+</button>
      <button type="button" class="btn btn-primary mb-3">-</button>
    </div>

    <div class="form-row align-items-center ml-3">
      <div class="col-md-2 mb-3">
        <select id="payeur2" class="form-control mr-3">
          <option selected>Alain</option>
          <option>Bernard</option>
          <option>Caisse commune</option>
        </select>
      </div>
      <div class="col-md-1 mb-3">
        <input type="text" class="form-control" id="montant" placeholder="0.00 €">
      </div>
      <button type="button" class="btn btn-primary mr-1 mb-3">+</button>
      <button type="button" class="btn btn-primary mb-3">-</button>
    </div>
 
    <div class="form-row align-items-center ml-3">
      <div class="col-md-2 mb-3">
        <select id="payeur3" class="form-control mr-3">
          <option selected>Alain</option>
          <option>Bernard</option>
          <option>Caisse commune</option>
        </select>
      </div>
      <div class="col-md-1 mb-3">
        <input type="text" class="form-control" id="montant" placeholder="0.00 €">
      </div>
      <button type="button" class="btn btn-primary mr-1 mb-3">+</button>
      <button type="button" class="btn btn-primary mb-3">-</button>
    </div>
 
    <div class="mb-2">Comptes bénéficiaires</div>
    <div class="form-row align-items-center ml-3">
      <div class="col-md-2 mb-3">
        <select id="beneficiaire1" class="form-control mr-3">
          <option>Alain</option>
          <option>Bernard</option>
          <option selected>Caisse commune</option>
        </select>
      </div>
      <div class="col-md-1 mb-3">
        <input type="text" class="form-control" id="montant" placeholder="0.00 €">
      </div>
      <button type="button" class="btn btn-primary mr-1 mb-3">+</button>
      <button type="button" class="btn btn-primary mb-3">-</button>
    </div>

    <div class="form-row align-items-center ml-3">
      <div class="col-md-2 mb-3">
        <select id="beneficiaire2" class="form-control mr-3">
          <option selected>Alain</option>
          <option>Bernard</option>
          <option>Caisse commune</option>
        </select>
      </div>
      <div class="col-md-1 mb-3">
        <input type="text" class="form-control" id="montant" placeholder="0.00 €">
      </div>
      <button type="button" class="btn btn-primary mr-1 mb-3">+</button>
      <button type="button" class="btn btn-primary mb-3">-</button>
    </div>

    <div class="form-row align-items-center ml-3">
      <div class="col-md-2 mb-3">
        <select id="beneficiaire3" class="form-control mr-3">
          <option selected>Alain</option>
          <option>Bernard</option>
          <option>Caisse commune</option>
        </select>
      </div>
      <div class="col-md-1 mb-3">
        <input type="text" class="form-control" id="montant" placeholder="0.00 €">
      </div>
      <button type="button" class="btn btn-primary mr-1 mb-3">+</button>
      <button type="button" class="btn btn-primary mb-3">-</button>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>
  </div>-->