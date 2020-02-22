 <html>

<?php
include("connexion.inc.php");
//Récupere le nom du champ de la ligne selectionnée

$cle=$_POST["cle"];

//Récupere la clé primaire de la ligne selectionnée
$id = $_POST["id"];
//Récupere le nom de la table
$table =$_POST["table"];
try {
	$requete= 'DELETE FROM '.$table.' WHERE '.$cle.'= "'.$id.'";';
	$bd->query($requete);
	echo 'Youpi';
	header('refresh:1; liste_'.$table.'.php');
	}
	
	catch (Exception $e){
		die('Marche po du tout ');
		header('refresh:1; liste_'.$table.'.php');
	}
	
	
?>