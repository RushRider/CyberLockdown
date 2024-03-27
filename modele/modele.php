<?php
function DbConnexion(){
    try {
        $db= new PDO('mysql:host=localhost;dbname=cyberlockdown;charset=utf8','root','');
        return $db;
        }catch(exception $e){
            die('Erreur : '.$e->getMessage());
        }
}

function accountCreate($pseudo,$hash,$nom,$prenom,$mail,$num,$pays){
    $db=DbConnexion();
    $sql="insert into connect (pseudo,hash,nom,prenom,mail,phone,pays) values (:pseudo,:hash,:nom,:prenom,:mail,:phone,:pays)";
    $statement=$db->prepare($sql);
    $statement->bindParam(':pseudo', $pseudo);
    $statement->bindParam(':hash', $hash);
    $statement->bindParam(':nom', $nom);
    $statement->bindParam(':prenom', $prenom);
    $statement->bindParam(':mail', $mail);
    $statement->bindParam(':phone', $num);
    $statement->bindParam(':pays', $pays);
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