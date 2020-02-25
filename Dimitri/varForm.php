<?php
// define variables and set to empty values
$prenomErr = $nomErr = $adresseErr = $mailErr = $telErr = "";
$prenom = $nom = $adresse = $mail = $tel = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["prenom"])) {
        $prenomErr = "Prenom is required";
    } else {
        $prenom = test_input($_POST["prenom"]);
    }

    if (empty($_POST["nom"])) {
        $nomErr = "Nom is required";
    } else {
        $email = test_input($_POST["nom"]);
    }

    if (empty($_POST["mail"])) {
        $mailErr = "Mail is required";
    } else {
        $website = test_input($_POST["mail"]);
    }

    if (empty($_POST["adresse"])) {
        $adresseErr = "Adresse is required";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["tel"])) {
        $telErr = "Tel is required";
    } else {
        $tel = test_input($_POST["tel"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function is_Set($data) {
    return $data != "";
}

?>