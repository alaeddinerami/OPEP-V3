<?php
include("../modele/utilisateurs.php");

session_start();

if (isset($_POST["submitInsc"])) {
    $nomInsc = $_POST["nomInsc"];
    $prenomInsc = $_POST["prenomInsc"];
    $emailInsc = $_POST["emailInsc"];
    $mdpInsc = $_POST["mdpInsc"];

    $signup = new Utilisateurs();
    $signup->insert_user($nomInsc, $prenomInsc, $emailInsc, $mdpInsc);

    $_SESSION["email"] = $emailInsc;
    header("Location: ../views/roles.php?");
    exit();
}
