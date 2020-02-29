<?php 
include("index.php");
include("connexion.inc.php");
?>



<?php

/*
// vérification de la connexion
if (isset($_POST["login"])&&isset($_POST["password"])){
		$login= $_POST["login"];
		$password =$_POST["password"];
		include("connexion.inc.php");
		$req ='SELECT * FROM Login where login = "'.$login.'"';
		$execute=$bd->query($req);
		$result = $execute -> fetch();
		if (!$result){
			echo "Les champs entrés sont faux ";
			header('refresh:1; authentification.php');
		}
		else {
			if ($result["password"]==md5($password)){
				session_start();
				$_SESSION["login"]=$result["login"];
				$_SESSION["password"]=$result["password"];
				header('refresh:1; index.html');
			


			}
			else{
				echo "Mot de passe faux .";
				header('refresh:3; authentification.php');
			}
		}
}



*/?>
<?php
// Permet de lire les champs d'une table et renvoie un tableau contenant ces champs 
 function mysql_field_array( $requete ) {
   
        $field = mysql_num_fields( $query );
   
        for ( $i = 0; $i < $field; $i++ ) {
       
            $names[] = mysql_field_name( $query, $i );
       
        }
       
        return $names;
   
    }
function deleteTable ($table, $field ,$ligne){
    //Affiche un bouton à droite de la ligne pour supprimer l'élément
        echo '<td>
                    <form method =POST Action ="Delete.php"/>
                        <input type ="hidden" name="table" value="'.$table.'"/>
                        <input type ="hidden" name="cle" value="'.$field[0].' "/>
              <input type ="submit" value="Supprimer"/>
                        </form>
                        </td>';
}
function edit($table, $field ,$ligne){
    //Modifier
       echo '<td>
                    <form method =POST Action ="Update.php"/>
                        <input type ="hidden" name="id" value="'.$field[0].'"/>
                        <input type ="hidden" name="table" value="'.$table.'"/> 
                        
              <input type ="hidden" name="cle" value="'.$field[0].'"/>';
              for ($i= 0; $i<sizeof($field);$i++){
                echo'<input type ="hidden" name="nomChamp'.$i.'" value="'.$field[i].'"/>';
              }
              
        echo ' 
              <input type ="submit" value="Modifier"/>
                        </form>
                        </td>';
}
function insert($table){
    //fomulaire d'insertion
     $requete = "Select * FROM  $table";
    $total = 0 ; 
    $execute = $bd-> query($requete);
    $res = mysql_query($requete);
    $fields = mysql_field_array($res);
    $sizeTable =sizeof($field) ;
   echo'
    <table>
<h1>Liste des $table<h1>
<br>
<form  method ="POST" Action ="insertion.php">
  <h1> Formulaire insertion </h1>
  <p>Insérer un nouveau $table dans la base de données</p>';
       for ($i= 0; $i<sizeof($field);$i++){
       echo '<Label for ="prenom">'.$field[i].':</label>';
       echo ' <input type="text" name="champ'.$i.'/> ';
   }

  echo'
  <input type ="hidden" name="table" value="'.$table.'"/>
  <input type="submit" value="valider">
 </body>
 </form>
      </table>';
}
    
function read_Table($table){
  //read Table 
    $table = $_POST["table"];
    $requete = "Select * FROM  $table";
    $total = 0 ; 
    $execute = $bd-> query($requete);
    $res = mysql_query($requete);
    $fields = mysql_field_array($res);


    
    while($ligne = $execute -> fetch()){
       
        $total+=1;
        echo '<tr> ';
         foreach ($fields as &$field){
        echo ' <td>'.$ligne["$field"].'</td>';
             }
      //Affiche un bouton à droite de la ligne pour supprimer l'élément
        deleteTable($table ,$field ,$ligne);
    //Affiche un bouton à droite de la ligne pour modifier les éléments 
        edit($table ,$field ,$ligne);
    // donne tous les noms des champs de la tables,le nom de la table et la clé primaire 
     
        echo'</tr>';
        

    }
    $execute->closeCursor();

    echo '<p>';
    echo "Nombre d'enregistrements ".$total.".";
    echo '<p>';

    
}

    
    
    ?>
    </table>
    </body>
    </html>
    
    <?php
    
// en cas d'absence d'authentification
/*else {
    echo "Vous n'avez pas le droit !!";
    header('refresh:1; authentification.php');

}*/

    
?>