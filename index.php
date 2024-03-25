<?php 
require_once("controller\controller.php"); 
footerDisplay();
    if(htmlspecialchars(isset($_POST["p"])) && htmlspecialchars(!empty($_POST["p"]))){
        $p = htmlspecialchars($_POST["p"]);
        if($p=="connect"){
            connectDisplay();
        }else if($p=="home"){
            homeDisplay();
        }
    }else{
        connectDisplay();
    }
