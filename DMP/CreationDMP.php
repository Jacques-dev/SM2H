<?php
  require('../FonctionDoc/fonctiondoc.php');
  start("CreationDMP.php");
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

		<div class="form-style-2">
      <div class="form-style-2-heading">Création dmp</div>
      <form action="" method="post">

      <label for="field1"><span>Nom <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
      <label for="field2"><span>Prenom <span class="required">*</span></span><input type="text" class="input-field" name="field2" value="" /></label>
      <label for="field1"><span>Numéro de sécurité social <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
      <label><span>date de naissance (JJ/MM/AAAA) <span class="required">*</span></span><input type="text" class="tel-number-field" name="JJ" value="" maxlength="2" />-<input type="text" class="tel-number-field" name="MM" value="" maxlength="2"  />-<input type="text" class="tel-number-field" name="AAAA" value="" maxlength="4"  /></label>
      <label for="field1"><span>Sexe<span class="required">*</span></span><select name="field4" class="select-field">
      <option value="M">Masculin</option>
      <option value="F">Féminin</option>
      </select></label>
      <label for="field1"><span>Adresse <span class="required">*</span></span><input type="text" class="input-field" name="adresse" value="" /></label>
      <label for="field1"><span>Ville <span class="required">*</span></span><input type="text" class="input-field" name="ville" value="" /></label>
      <label for="field1"><span>Téléphone <span class="required">*</span></span><input type="text" class="input-field"  maxlength="10" name="tel" value="" /></label>

      <label><span> </span><input type="submit" value="Submit" /></label>
      </form>
      </div>

		</div>


  </div>
<?php
last();
?>
