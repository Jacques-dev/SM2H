<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>SM2H</title>
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
	 
	
    <!--  NavBar -->
    <div class="navBar">
        <div onclick="location.href='./index.php';" class="navBarItemLeft">
            <img class="navBarLogo" src="./images/logo.png" alt="logo">
        </div>

        <div onclick="window.open('./index.php');" class="navBarItemRight">
            <img class="navBarLogo" src="./images/profile.png" alt="logo">
        </div>
        <div onclick="window.open('https://calendar.google.com/');" class="navBarItemRight">
            <img class="navBarLogo" src="./images/calendar.png" alt="logo">
        </div>
        <div class="navBarTitle">
            Nom de la personne connecté
        </div>


    </div>

    <!-- content  -->
    <div class="content">
		<p class="centrer">
			Dossier du patient : Nom Prénom<br>
		</p>

		<ul id="menu">
			<li>
				<a href="#">Profil</a>
			</li>
			<li>
				<a href="films.html">Hospitalisation</a>
			</li>
			<li>
				<a href="musiques.html">Ordonnance</a>
			</li>
		</ul>

<?php

$array = array("foo", "bar", "hello", "world");
//~ var_dump($array);
$nb = count($array);
?>


 
 
 
		<div id="Boite"> 
			<table>
				<tr class="centrer"> <th>Résulats de recherches </th> </tr>
				<tr class="centrer">  <th>Hospitalisations </th>  </tr>
				 <?php
				 for ($i=0 ; $i<$nb ; $i++) {
                     echo " <form action=\"affichageDocu.php\" method=\"get\">";
					 if ( $i%2==0 ) {
                         echo " <tr id=\"lignePair\" > ";
                         echo "<input type=\"text\" name=\"name\" id=\"name\" value=\"$array[$i]\" readonly>";
                         echo "<td > $array[$i]  </td> ";
                         echo "<td><input name=\"add\" type=\"submit\" value=\"consulter \"> </td>";
                         echo  "</tr>";
                        
                         
                     }
					
                     else {
                        echo " <tr id=\"ligneImPair\" > ";
                        echo "<input type=\"text\" name=\"name\" id=\"name\" value=\"$array[$i]\" readonly>";
                        echo "<td > $array[$i]  </td> ";
                         echo "<td><input name=\"add\" type=\"submit\" value=\"consulter \"> </td>";
                         
                         

                        echo  "</tr>"; }
					
                     echo"</form>";
                     
					 }
				 ?>



			</table>
			
		
			
		</div>
	
	
    </div>


<?php
    $bouton = $_GET['add'];
    if ( $bouton=="Subscribe!" ) {
        echo " coucou" ;
    } else { echo " mdr " ;}
    $nom = $_GET['name'] ;
    echo $nom  ;
    ?>

</body>

</html>
