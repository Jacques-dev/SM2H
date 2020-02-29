<?php
include("connexion.inc.php");

$table=$_POST["table"];

$sizeTable=$_POST["sizeTable"];

// si la clé primaire n'est pas remplie renvoie dans la liste
if ($_POST["champ1"] == ""){
		header('refresh:3; liste_'.$table.'.php');
		echo' Vous allez etre redirigez';
		}
	else {
		try {
            //récupere tous les champs de la table 
             $requete='Insert INTO '.$table.' Values("';
  for (i= 0; i<sizeof($field);i++){
              
               echo' $_POST["champ'.i.'"];'
              
              }
		  ");';
		$exe =$bd->exec($requete);
		echo "L'enregistrement a bien été ajouté.";
			echo'<br>';
		echo "Vous allez etre rediriger ,veuillez patienter.";
		header('refresh:1; liste_'.$table.'.php');
		}
		catch (Exception $e){
		die('Erreur');
		echo'<br>';
		echo 'la clé primaire '.$_POST["champ1"].' est déjà utilisé';
		echo'<br>';
		echo "Vous allez etre rediriger ,veuillez patienter.";
		header('refresh:1; liste_'.$table.'.php');
		}
	}

	
?>