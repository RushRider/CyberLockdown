<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberLockdown</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<?php 
require_once("controller\controller.php"); 
    if(htmlspecialchars_decode(isset($_POST["p"])) && htmlspecialchars_decode(!empty($_POST["p"]))){
        $p = htmlspecialchars($_POST["p"]);
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
?>    
    <footer>
        <p>Copyright © 2024 CyberLockdown Inc. All rights reserved. Terms of services | Contact | Privacy policies</p>
    </footer>
</body>
</html>