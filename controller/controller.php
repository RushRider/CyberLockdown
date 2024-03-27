<?php 
function connectDisplay(){
    require_once("views/connect.php");
}

function registerDisplay(){
    require_once("views/register.php");
}

function homeDisplay(){
    require_once("views/accueil.php");
}

function footerDisplay(){
    require_once("views/footer.php");   
}

function newAccount($pseudo,$hash,$nom,$prenom,$mail,$num,$pays,$salt){
    require("modele/modele.php");
    accountCreate($pseudo,$hash,$nom,$prenom,$mail,$num,$pays,$salt);
}

function tryPassword($id,$mdp){
    require("modele/modele.php");
    $info=RecupConnect($id);
    $sel=htmlspecialchars_decode($info['salt']);
    $tryHash=password_hash($mdp.$sel,PASSWORD_DEFAULT);
    $real=$info['hash'];
    if($tryHash==$real){
        return true;
    }else{
        return false;
    }
}
