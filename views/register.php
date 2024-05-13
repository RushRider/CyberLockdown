<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberLockdown</title>
    <link href="assets/register.css" rel="stylesheet">
</head>
<body>
    <div class="logo">
        <img src="assets/logo.png">
    </div>
    <div class="cbld_titre">
        <p>CyberLockdown</p>
    </div>
    <div class="fenetre_princ">
    <form action="index.php" method="post" class="form_id">
        <div class="container">
            <div class="id_nom">
                <label for="id">Nom</label> <br>
                <input type="text" placeholder="Nom" name="nom" id="nom" required />
            </div>
            <div class="id_prenom">
                <label for="id">Prénom</label> <br>
                <input type="text" placeholder="Prénom" name="prenom" id="prenom" required />
            </div>
        </div>
        <div class="id_user">
            <label for="id">Nom d'utilisateur</label> <br>
            <input type="text" placeholder="Nom d'utilisateur" name="pseudo" id="pseudo" required />
        </div>
        <div class="id_mail">
            <label for="id">Adresse mail</label> <br>
            <input type="text" placeholder="Adresse mail" name="mail" id="mail" required />
        </div>
        <div class="mdp_fen">
            <label for="id">Mot de passe</label> <br>
            <input type="password" placeholder="Mot de passe" name="mdp" id="mdp" required />
        </div>
        <div class="mdp_fen">
            <label for="id">Confirmation de Mot de passe</label> <br>
            <input type="password" placeholder="Confirmation de Mot de passe" name="mdp2" id="mdp2" required />
        </div>
        <div class="id_num">
            <label for="id">Numéro de téléphone</label> <br>
            <input type="text" placeholder="Numéro de téléphone" name="num" id="num" required />
        </div>
        <div class="id_country">
            <label for="id">Pays</label> <br>
            <input type="text" placeholder="Pays" name="pays" id="pays" required />
        </div>
        <div class="submt_fen">
            <input type="submit" value="Créer compte">
        </div>
        <div class="revenir">
            <a href="connect.php">J'ai un compte enfaîte</a>
        </div>
    </form>
    </div>
</body>

