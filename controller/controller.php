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
    require_once("modele/modele.php");
    accountCreate($pseudo,$hash,$nom,$prenom,$mail,$num,$pays,$salt);
}

function tryPassword($id, $mdp) {
    require_once("modele/modele.php");
    $info=RecupConnect($id);
    $sel=$info['salt'];
    $tryHash=password_hash($mdp.$sel,PASSWORD_DEFAULT);
    $real=$info['hash'];
    echo"<h1>".$id."</h1>";
    echo"<h1>".$sel."</h1>";
    echo"<h1>".$mdp."</h1>";
    echo"<h1>".htmlspecialchars_decode($tryHash)."</h1>";
    echo"<h1>".$real."</h1>";
    if(password_verify($tryHash, $real)){
        return true;
    }else{
        return false;
    }
}