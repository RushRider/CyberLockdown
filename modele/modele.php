<?php

require_once("dbconnect.php");
function accountCreate($pseudo,$hash,$nom,$prenom,$mail,$num,$pays,$salt,$key){
    $db=DbConnexion();
    $sql="insert into connect (pseudo,hash,nom,prenom,mail,phone,pays,salt,cle) values (:pseudo,:hash,:nom,:prenom,:mail,:phone,:pays,:sel,:key)";
    $statement=$db->prepare($sql);
    $statement->bindParam(':pseudo', $pseudo);
    $statement->bindParam(':hash', $hash);
    $statement->bindParam(':nom', $nom);
    $statement->bindParam(':prenom', $prenom);
    $statement->bindParam(':mail', $mail);
    $statement->bindParam(':phone', $num);
    $statement->bindParam(':pays', $pays);
    $statement->bindParam(':sel', $salt);
    $statement->bindParam(':key', $key);
    return $statement->execute();
}

function RecupConnect($id){
    $db=DbConnexion();
    $sql="select * from connect where pseudo=:id";
    $statement=$db->prepare($sql);
    $statement->bindParam(':id', $id);
    $statement->execute();
    return $statement->fetch(); 
}

function addApp($account,$name,$id,$mdp,$iv,$type){
    $db=DbConnexion();
    $info=RecupConnect($account);
    $idU=$info['id'];
    $sql="insert into passwords (idUser,name,pseudo,mdp,iv,type) values (:account,:name,:id,:mdp,:iv,:type)";
    $statement=$db->prepare($sql);
    $statement->bindParam(':account', $idU);
    $statement->bindParam(':name', $name);
    $statement->bindParam(':id', $id);
    $statement->bindParam(':mdp', $mdp);
    $statement->bindParam(':iv', $iv);
    $statement->bindParam(':type', $type);
    $statement->execute();
}

function Content($name,$type){
    $db=DbConnexion();
    $info=RecupConnect($name);
    $idU=$info['id'];
    $sql="select * from passwords where idUser=:id and type=:type order by name asc";
    $statement=$db->prepare($sql);
    $statement->bindParam(':id', $idU);
    $statement->bindParam(':type', $type);
    $statement->execute();
    return $statement->fetchAll(); 
}