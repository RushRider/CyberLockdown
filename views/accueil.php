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
    <div class="profile"><?php echo($_SESSION['id']) ?></div>
    <img src="assets/icon_avatar.png">
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
            navigator.clipboard.writeText(passwordField.value).then(function() {
                alert("Mot de passe copié avec succès!");
            }).catch(function(error) {
                alert("Erreur lors de la copie: " + error);
            });
        }
    </script>
    </div>

</body>
</html>