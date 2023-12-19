<?php
include("../modele/utilisateurs.php");
session_start();
if(isset($_POST["submitConn"])){
    $emailConn = $_POST["emailConn"];
    $mdpConn = $_POST["mdpConn"];
    
    $login = new Utilisateurs();
    $login->Login($emailConn,$mdpConn);
    $emailInsc = $_SESSION["email"];
    echo"$emailInsc
    ";
}
?>