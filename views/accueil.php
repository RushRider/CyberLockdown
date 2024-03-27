<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vos mots de passe</title>
    <link href="../assets/home.css" rel="stylesheet">
</head>
<header>
    <img src="../assets/logo.png">
    <div class="theader">Vos mots de passe</div>
    <div class="profile">Pseudo</div>
    <img src="../assets/icon_avatar.png">
</header>

<body>
    <div class="fenetre">
        <div class="travail">
            <p>Travail et éducation</p>
        </div>
        <div class="finance">
            <p>Finance et achat</p>
        </div>
        <div class="comm">
            <p>Email et communication</p>
        </div>
        <div class="autre">
            <p>Autre</p>
        </div>
    </div>

    <div class="generate">
        <input type="text" id="passwordField" readonly>
        <button onclick="GenPass()">Générer</button>
    </div>
</body>
<footer>
    <p>Copyright © 2024 CyberLockdown Inc. All rights reserved. Terms of services | Contact | Privacy policies</p>
</footer>
</html>