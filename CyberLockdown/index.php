<?php 
require_once("controller\controller.php"); 
require_once("views\footer.php");
    if(htmlspecialchars_decode(isset($_POST["p"])) && htmlspecialchars_decode(!empty($_POST["p"]))){
        $p = htmlspecialchars_decode($_POST["p"]);
        if($p=="connect"){
            connectDisplay();
            echo"<link href='assets/connect.css' rel='stylesheet'>";
        }else if($p=="home"){
            homeDisplay();
            echo"<link href='assets/home.css' rel='stylesheet'>";
        }
    }else{
        connectDisplay();
        echo"<link href='assets/connect.css' rel='stylesheet'>";
    }
