<?php 
require_once("controller/controller.php"); 
footerDisplay();
    if(htmlspecialchars(isset($_POST["mail"])) && htmlspecialchars(!empty($_POST["mail"])) && htmlspecialchars(!empty($_POST["mdp1"]))==htmlspecialchars(!empty($_POST["mdp2"]))){
        $mail = htmlspecialchars($_POST["mail"]);
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $mdp = htmlspecialchars($_POST["mdp"]);
        $num = htmlspecialchars($_POST["num"]);
        $pays = htmlspecialchars($_POST["pays"]);
        $sel=openssl_random_pseudo_bytes(16);
        $sel_hex = bin2hex($sel);
        $hash=password_hash($mdp.$sel,PASSWORD_DEFAULT);
        newAccount($pseudo,$hash,$nom,$prenom,$mail,$num,$pays);
        connectDisplay();
    }else{
        echo"<h1>sale_merde</h1>";
    }