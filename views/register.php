<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberLockdown</title>
    <link href="/assets/register.css" rel="stylesheet">
</head>
<body>
    <div class="logo">
        <img src="assets/logo.png">
    </div>
    <div class="cbld_titre">
        <p>CyberLockdown</p>
    </div>
    <div class="fenetre_princ">
    <form action="/index.php" method="post" class="form_id">
        <div class="id_mail">
            <label for="id">Adresse mail</label>
            <input type="text" name="mail" id="mail" required />
        </div>
        <div class="id_user">
            <label for="id">Nom d'utilisateur</label>
            <input type="text" name="pseudo" id="pseudo" required />
        </div>
        <div class="id_nom">
            <label for="id">Nom</label>
            <input type="text" name="nom" id="nom" required />
        </div>
        <div class="id_prenom">
            <label for="id">Prénom</label>
            <input type="text" name="prenom" id="prenom" required />
        </div>
        <div class="mdp_fen">
            <label for="id">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" required />
        </div>
        <div class="mdp_fen">
            <label for="id">Confirmation de Mot de passe</label>
            <input type="password2" name="mdp2" id="mdp2" required />
        </div>
        <div class="id_num">
            <label for="id">Numéro de téléphone</label>
            <input type="text" name="num" id="num" required />
        </div>
        <div class="id_country">
            <label for="id">Pays</label>
            <input type="text" name="pays" id="pays" required />
        </div>
        <div class="submt_fen">
            <input type="submit" value="Creer compte">
        </div>
    </form>
    </div>
</body>

