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
			
			<div id="zoneAffichageChamps">
				<form action="" method="post">
					<label><span> Numéro de sécurité social </span> <input class="zoneTexte" type="text" value="01245678" ></label>
					<label><span> Nom </span> <input class="zoneTexte" type="text" value="Germany" ></label>
					<label><span> Prénom </span> <input class="zoneTexte" type="text" value="Yona" ></label>
					<label><span> Sexe </span> <input class="zoneTexte" type="text" value="F" ></label>
					<label><span> Date de naissance </span> <input class="zoneTexte" type="text" value="17/11/2000" ></label>
					<label><span> Adresse </span> <input class="zoneTexte" type="text" value="4 rue des mdr's " ></label>
					<label><span> ville </span> <input class="zoneTexte" type="text" value="MdrLand" ></label>

					<label><span> </span><input type="submit" value="Submit" /></label>
				</form>

			</div>
			
		</div>
	
	
    </div>
</body>

</html>
