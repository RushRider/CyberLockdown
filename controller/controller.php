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
    $real=$info['hash'];
    $mdp1=$mdp.$sel;
    $tryHash=password_hash($mdp1,PASSWORD_DEFAULT);
    echo"<h1>".$real."</h1>";
    echo"<h1>".$tryHash."</h1>";
    if(password_verify($tryHash, $real)){
        return true;
    }else{
        return true;
    }
}

function GenPass(){
    $chaine = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#-_/:!+*$%;,";
    $nb_caract = 14;
    $pass = "";
    for($u = 1; $u <= $nb_caract; $u++) {
        $nb = strlen($chaine);
        $nb = mt_rand(0,($nb-1));
        $pass.=$chaine[$nb];
    }
}