<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>SM2H</title>
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
	
				<?php 
                    $bouton = $_GET['add'];
                    $id = $_GET['name'];
                    if ( $bouton == "consulter documuents" ){
                        Header("Location: ./../RechercherDocument/index.php?user=".$id);

                } else {

                        Header("Location: ./../AjoutHospi/index.php?user=".$id);
            }

                ?>


</body>

</html>
