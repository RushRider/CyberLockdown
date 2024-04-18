<?php
require_once("controller/controller.php"); 
footerDisplay();
session_start();
    if(htmlspecialchars(isset($_POST["pseudo"])) && htmlspecialchars(!empty($_POST["pseudo"])) && htmlspecialchars(!empty($_POST["mdp"]))==htmlspecialchars(!empty($_POST["mdp2"]))){
        $mail = htmlspecialchars($_POST["mail"]);
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $mdp = htmlspecialchars($_POST["mdp"]);
        $num = htmlspecialchars($_POST["num"]);
        $pays = htmlspecialchars($_POST["pays"]);
        $sel=openssl_random_pseudo_bytes(16);
        $sel_hex=bin2hex($sel);
        $mdp1=$mdp.$sel_hex;
        $hash=password_hash($mdp1,PASSWORD_DEFAULT);
        newAccount($pseudo,$hash,$nom,$prenom,$mail,$num,$pays,$sel_hex);
        connectDisplay();
    }else{
        if(htmlspecialchars(isset($_POST["app"])) && htmlspecialchars(isset($_SESSION['hash']))){
            appAdd($_SESSION['name'],$_POST["app"],$_POST["iden"],$_POST["mdp"],$_GET["appType"]);
            homeDisplay();
        }else{
            if(htmlspecialchars(isset($_GET["p"])) && htmlspecialchars(!empty($_GET["p"]))){
                $p=htmlspecialchars($_GET["p"]);
                if($p=="register"){
                    registerDisplay();
                }else{
                    if($p=="passwordforget"){
                        forgottenDisplay();
                    }else{
                        if($p=="home"){
                            if(htmlspecialchars(isset($_POST['tryId'])) && htmlspecialchars(isset($_POST['TryMdp'])) && htmlspecialchars(!empty($_POST['tryId'])) && htmlspecialchars(isset($_POST['TryMdp']))){
                                $id=htmlspecialchars($_POST['tryId']);
                                $mdpTest=htmlspecialchars($_POST['TryMdp']);
                                if(tryPassword($id,$mdpTest)){
                                    $_SESSION['name'] = $id;
                                    $_SESSION['hash']=$mdpTest;
                                    homeDisplay();
                                }else{
                                    connectDisplay();
                                }
                            }
                        }
                    }
                }
            }else{
                connectDisplay();
                }
        }
    }