<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberLockdown</title>
    <link href="../assets/connect.css" rel="stylesheet">
</head>
<body>
    <div class="logo">
        <img src="../assets/logo.png">
    </div>
    <div class="cbld_titre">
        <p>CyberLockdown</p>
    </div>
    <div class="fenetre_princ">
    <form action="index.php?p=home" method="post" class="form_id">
        <div class="id_fen">
            <label for="id">Identifiant</label>
            <input type="text" name="tryId" id="name" required />
        </div>
        <div class="mdp_fen">
            <label for="id">Mot de passe</label>
            <input type="password" name="TryMdp" id="mdp" required />
        </div>
        <div class="mdp_oubli">
            <p>Mot de passe oublié ?</p>
        </div>
        <div class="submt_fen">
            <input type="submit" value="Se connecter">
        </div>
        <div class="pacompte_fen">
            <a href="/index.php?p=register">Pas de compte ?</a>
        </div>
    </form>
    </div>
</body>