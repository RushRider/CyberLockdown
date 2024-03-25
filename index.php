<?php 
require_once("controller\controller.php"); 
footerDisplay();
    if(htmlspecialchars_decode(isset($_POST["p"])) && htmlspecialchars_decode(!empty($_POST["p"]))){
        $p = htmlspecialchars_decode($_POST["p"]);
        if($p=="connect"){
            connectDisplay();
        }else if($p=="home"){
            homeDisplay();
        }
    }else{
        connectDisplay();
    }
