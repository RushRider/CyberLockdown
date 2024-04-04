<?php
function DbConnexion(){
    try {
        $db= new PDO('mysql:host=localhost;dbname=cyberlockdown;charset=utf8','root','');
        return $db;
        }catch(exception $e){
            die('Erreur : '.$e->getMessage());
        }
}a