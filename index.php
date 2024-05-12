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
        $key=openssl_random_pseudo_bytes(32);
        $key_hex=bin2hex($key);
        $mdp1=$mdp.$sel_hex;
        $hash=password_hash($mdp1,PASSWORD_DEFAULT);
        newAccount($pseudo,$hash,$nom,$prenom,$mail,$num,$pays,$sel_hex,$key_hex);
        connectDisplay();
    }else{
        if(htmlspecialchars(isset($_POST["app"])) && htmlspecialchars(isset($_SESSION['hash']))){
            $info=recupInfo($_SESSION['name']);
            $keyr=$info['cle'];
            $key=hex2bin($keyr);
            $iv=openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
            $crypted=openssl_encrypt($_POST["mdp"], 'aes-256-cbc', $key,0,$iv);
            $iv_hex=bin2hex($iv);
            appAdd($_SESSION['name'],$_POST["app"],$_POST["iden"],$crypted,$iv_hex,$_GET["appType"]);
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
?>
<title>CyberLockdown</title>
<html lang="fr">