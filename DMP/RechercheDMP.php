<?php
  require('../FonctionDoc/fonctiondoc.php');
  start("RechercheDMP.php");
?>

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
  			<tr class="centrer">  <th>Patients </th>  </tr>
  			 <?php
  			 for ($i=0 ; $i<$nb ; $i++) {
  				 if ( $i%2==0 ) {
  					 echo " <tr id=\"lignePair\" > <td > $array[$i]  </td><td> <img src=\"images/fleche.png\" height=\"50\" width=\"50\"> </td> </tr>"; }
  				else {
  					 echo " <tr id=\"ligneImPair\" > <td> $array[$i]  </td><td> <img src=\"images/fleche.png\" height=\"50\" width=\"50\"> </td>  </tr>";
  				}

  				 }
  			 ?>

  		</table>
  	</div>
  </div>
<?php
last();
?>
