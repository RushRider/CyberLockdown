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
        $hash=password_hash($mdp.$sel,PASSWORD_DEFAULT);
        newAccount($pseudo,$hash,$nom,$prenom,$mail,$num,$pays,$sel);
        connectDisplay();
    }else{
        if(htmlspecialchars(isset($_GET["p"])) && htmlspecialchars(!empty($_GET["p"]))){
            $p=htmlspecialchars($_GET["p"]);
            if($p=="register"){
                registerDisplay();
            }else{
                if($p=="home"){
                    if(htmlspecialchars(isset($_POST['tryId'])) && htmlspecialchars(isset($_POST['TryMdp'])) && htmlspecialchars(!empty($_POST['tryId'])) && htmlspecialchars(isset($_POST['TryMdp']))){
                        $id=htmlspecialchars($_POST['tryId']);
                        $tryMdp=htmlspecialchars($_POST['TryMdp']);
                        if(tryPassword($id,$tryMdp)==true){
                            session_start();
                            $_SESSION['id'] = $id;
                            $_SESSION['hash']=$hash;
                            homeDisplay();
                        }else{
                            connectDisplay();
                        }
                    }
                }
            }
        }else{
            connectDisplay();
            }
    }