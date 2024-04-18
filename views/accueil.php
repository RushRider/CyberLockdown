<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vos mots de passe</title>
    <link href="assets/home.css" rel="stylesheet">
</head>
<header>
    <img src="assets/logo.png">
    <div class="theader">Vos mots de passe</div>
    <div class="profile"><?php echo($_SESSION['name']) ?></div>
    <img src="assets/icon_avatar.png">
</header>

<body>
    <div class="fenetre">
        <div class="travail">
            <p>Travail et éducation</p>
            <form action="index.php?appType=travail" method="POST">
                <h3>Ajouter un compte :</h3>
                <label for="email">Application :</label>
                <input type="text" id="app" name="app" required><br>
                <label for="email">Mail/Identifiant :</label>
                <input type="text" id="iden" name="iden" required><br>
                <label for="email">Mot de passe :</label>
                <input type="text" id="mdp" name="mdp" required><br>
                <button type="submit">Créer</button>
            </form>
        </div>
        <div class="finance">
            <p>Finance et achat</p>
            <form action="index.php?appType=finance" method="POST">
                <h3>Ajouter un compte :</h3>
                <label for="email">Application :</label>
                <input type="text" id="app" name="app" required><br>
                <label for="email">Mail/Identifiant :</label>
                <input type="text" id="iden" name="iden" required><br>
                <label for="email">Mot de passe :</label>
                <input type="text" id="mdp" name="mdp" required><br>
                <button type="submit">Créer</button>
            </form>
        </div>
        <div class="comm">
            <p>Email et communication</p>
            <form action="index.php?appType=com" method="POST">
                <h3>Ajouter un compte :</h3>
                <label for="email">Application :</label>
                <input type="text" id="app" name="app" required><br>
                <label for="email">Mail/Identifiant :</label>
                <input type="text" id="iden" name="iden" required><br>
                <label for="email">Mot de passe :</label>
                <input type="text" id="mdp" name="mdp" required><br>
                <button type="submit">Créer</button>
            </form>
        </div>
        <div class="autre">
            <p>Autre</p>
            <form action="index.php?appType=autre" method="POST">
                <h3>Ajouter un compte :</h3>
                <label for="email">Application :</label>
                <input type="text" id="app" name="app" required><br>
                <label for="email">Mail/Identifiant :</label>
                <input type="text" id="iden" name="iden" required><br>
                <label for="email">Mot de passe :</label>
                <input type="text" id="mdp" name="mdp" required><br>
                <button type="submit">Créer</button>
            </form>
        </div>
    </div>
</head>
<body>
    <div class= "Générateur">
<h2>Générateur de mot de passe personnalisé</h2>
    <label for="length">Longueur du mot de passe:</label>
    <input type="number" id="length" value="14" min="4" max="20" onkeydown="return false;"><br>

    <input type="checkbox" id="includeNumbers" checked>
    <label for="includeNumbers">Inclure des chiffres</label><br>

    <input type="checkbox" id="includeSymbols" checked>
    <label for="includeSymbols">Inclure des symboles</label><br>

    <input type="checkbox" id="includeUppercase" checked>
    <label for="includeUppercase">Inclure des majuscules</label><br>
<br>
    <button onclick="GenPass()">Générer Mot de Passe</button>
    <input type="text" id="passwordField" readonly>
    <button onclick="copyToClipboard()">Copier</button><br>

    <script>
        function GenPass() {
            var length = document.getElementById("length").value;
            var includeNumbers = document.getElementById("includeNumbers").checked;
            var includeSymbols = document.getElementById("includeSymbols").checked;
            var includeUppercase = document.getElementById("includeUppercase").checked;

            var baseCharset = "abcdefghijklmnopqrstuvwxyz";
            var numberCharset = "0123456789";
            var symbolCharset = "@#-_/:!+*$%;,";
            var upperCharset = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

            var charset = baseCharset;
            if (includeNumbers) {
                charset += numberCharset;
            }
            if (includeSymbols) {
                charset += symbolCharset;
            }
            if (includeUppercase) {
                charset += upperCharset;
            }

            var password = "";
            for (var i = 0; i < length; i++) {
                var randomIndex = Math.floor(Math.random() * charset.length);
                password += charset[randomIndex];
            }
            document.getElementById("passwordField").value = password;
        }
        function copyToClipboard() {
    var passwordField = document.getElementById("passwordField");
    if (!navigator.clipboard) {
        // Fallback pour les navigateurs sans support de Clipboard API
        passwordField.select();
        try {
            var successful = document.execCommand('copy');
            var msg = successful ? 'réussie' : 'échouée';
            alert('Copie ' + msg + '.');
        } catch (err) {
            alert('Erreur lors de la copie, veuillez utiliser Ctrl+C ou Cmd+C manuellement.');
        }
    } else {
        navigator.clipboard.writeText(passwordField.value).then(function() {
            alert("Mot de passe copié avec succès!");
        }, function(err) {
            alert('Erreur lors de la copie: ' + err);
            passwordField.select();
            alert('Veuillez utiliser Ctrl+C ou Cmd+C pour copier manuellement.');
        });
    }
}

    </script>
    </div>

</body>
</html>