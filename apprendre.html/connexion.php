<?php
//fonction
/*function Securise(f$string){
	//on regarde si le type de string est un nombre entier [int]
	if (ctype_digit($string)){
		$string=intval($string);

	}else {
		//pour les autres type
		$string = strip_tags($string);
		$string = addcslashes($string, '%_');
	}
}*/
//Base de donnée
try{
	$bdd = new PDO('mysql:host=localhost;dbname=tuto;charset=utf8','root','',array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));

}catch (Exception $e){
 echo "Erreur: ".$e;
} 
?>