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
				$id = $_GET['name'] ;
				echo $id ; 
			?>
			
			<div id="zoneAffichageChamps">
				<label><span> Numéro de l'hospitalisation </span> <input class="zoneTexte" type="text" value=<?php
				echo($id) ?> readonly></label>
			</br>
			<label><span> Nom </span> <input class="zoneTexte" type="text" value="Germany" readonly></label>
			<label><span> Prénom </span> <input class="zoneTexte" type="text" value="Yona" readonly></label>
			
			<label><span> Descriptif </span> <textarea class="zoneTexte" type="text" value="17/11/2000" readonly>mmmmmdr</textarea></label>
			

			</div>
			
		</div>
	
	
    </div>
</body>

</html>
