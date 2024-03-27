<?php
function DbConnexion(){
    try {
        $db= new PDO('mysql:host=localhost;dbname=cyberlockdown;charset=utf8','root','');
        return $db;
        }catch(exception $e){
            die('Erreur : '.$e->getMessage());
        }
}

function accountCreate($pseudo,$hash,$nom,$prenom,$mail,$num,$pays,$salt){
    $db=DbConnexion();
    $sql="insert into connect (pseudo,hash,nom,prenom,mail,phone,pays,salt) values (:pseudo,:hash,:nom,:prenom,:mail,:phone,:pays,:sel)";
    $statement=$db->prepare($sql);
    $statement->bindParam(':pseudo', $pseudo);
    $statement->bindParam(':hash', $hash);
    $statement->bindParam(':nom', $nom);
    $statement->bindParam(':prenom', $prenom);
    $statement->bindParam(':mail', $mail);
    $statement->bindParam(':phone', $num);
    $statement->bindParam(':pays', $pays);
    $statement->bindParam(':sel', $salt);
    return $statement->execute();
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

function RecupConnect($id){
    $db=DbConnexion();
    $sql="select hash,salt from connect where pseudo=:id";
    $statement=$db->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->execute();
    return $statement->fetch(); 
}