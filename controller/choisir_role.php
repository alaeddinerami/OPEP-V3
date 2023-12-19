<?php
include("../modele/roles.php");
session_start();
if (isset($_POST['submitRole'])) {

    $role = $_POST["role"];
    $emailInsc = $_SESSION["email"];

    $choisir = new Roles();
    $choisir->ChoisirRole($role, $emailInsc);
    header("Location: ../views/login.php?");
}
