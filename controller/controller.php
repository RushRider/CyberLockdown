<?php 
function connectDisplay(){
    require_once("views/connect.php");
}

function homeDisplay(){
    require_once("views/acceuil.php");
}

function footerDisplay(){
    require_once("views/footer.php");   
}

function newAccount($pseudo,$hash,$nom,$prenom,$mail,$num,$pays){
    require("modele/modele.php");
    accountCreate($pseudo,$hash,$nom,$prenom,$mail,$num,$pays);
}