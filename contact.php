<?php
if (isset($_POST)) {
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $projet = $_POST['project'];
    $message = $_POST['message'];
    mail('mohmedaboufadhel@gmail.com', $projet, $message.' .Le nom de la personne est '.$nom.'. Voici son mail: '.$email);
    $_SESSION['mess'] = true;
}
header("Location:/");
