<?php
  require('../FonctionDoc/fonctiondoc.php');
  start("AffichageDMP.php");
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


		<div id="Boite">
			<div id="zoneAffichageChamps">
				<label><span> Numéro de sécurité social </span> <input class="zoneTexte" type="text" value="01245678" readonly></label>
  			<label><span> Nom </span> <input class="zoneTexte" type="text" value="Germany" readonly></label>
  			<label><span> Prénom </span> <input class="zoneTexte" type="text" value="Yona" readonly></label>
  			<label><span> Sexe </span> <input class="zoneTexte" type="text" value="F" readonly></label>
  			<label><span> Date de naissance </span> <input class="zoneTexte" type="text" value="17/11/2000" readonly></label>
  			<label><span> Adresse </span> <input class="zoneTexte" type="text" value="4 rue des mdr's " readonly></label>
  			<label><span> ville </span> <input class="zoneTexte" type="text" value="MdrLand" readonly></label>
  <!--
  			<label>Numéro de sécurité social</label><input type="text" value="Germany" readonly>  </input></label></br>
  			<label>Nom</label><input type="text" value="Germany" readonly>  </input></label></br>
  			<label>prénom</label><input type="text" value="Germany" readonly>  </input></label></br>
  			<label>Sexe</label><input type="text" value="Germany" readonly>  </input></label></br>
  			<label>Date de naissance (JJ/MM/AAAA) </label><input type="text" value="Germany" readonly>  </input></label></br>
  			<label>Adresse</label><input type="text" value="Germany" readonly>  </input></label></br>
  			<label>Ville</label><input type="text" value="Germany" readonly>  </input></label></br>
  -->
			</div>
		</div>
  </div>
<?php
last();
?>
