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
                    $id = $__GET['name'];
                    if ( $bouton == "consulter documuents" ){
                        Header("Location:../AjoutHospi/index.php?id=".$id);

                } else {

                        Header("Location: query.php?id=".$id);
            }

                ?>


</body>

</html>
