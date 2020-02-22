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

 
		<div id="Boite"> 
			
			<?php 
			$user = $_REQUEST['user'];
			 echo "coucou =  $user " ; 
			?>
		
			<div class="form-style-2">
<div class="form-style-2-heading">Création document</div>
<form action="" method="post">

<label for="field1"><span>Num DMP <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="<?php echo($user) ?>"  readonly /></label>

<label for="field1"><span>Descriptif <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
<label for="field1"><span>Type document<span class="required">*</span></span><select name="field4" class="select-field">
<option value="P">Prise de sang</option>
<option value="O">ordonnance</option>
</select></label>
<label for="field1"><span>Date (JJ/MM/AAAA) <span class="required">*</span></span><input type="text" class="input-field" name="adresse" value="" /></label>


<label><span> </span><input type="submit" value="Submit" /></label>
</form>
</div>
 
		</div>
	
	
    </div>
</body>

</html>
