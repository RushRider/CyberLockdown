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
    <div class="theader2">
        <div class="deco"><a href="views/deco.php">Déconnexion</a></div>
        <div class="profile"><?php echo($_SESSION['name']) ?></div>
        <img src="assets/icon_avatar.png">
    </div>
</header>

<body>
    <?php require_once("controller/controller.php"); ?>
    <div class="fenetre">
        <p>Travail et éducation</p>
        <div class="travail">
            <form action="index.php?appType=travail" method="POST">
                <h3>Ajouter un compte :</h3> <br>
                <label for="email">Site :</label>
                <input type="text" id="app" name="app" required><br>
                <label for="email">Mail/Identifiant :</label>
                <input type="text" id="iden" name="iden" required><br>
                <label for="email">Mot de passe :</label>
                <input type="text" id="mdp" name="mdp" required><br>
                <button class="boutons" type="submit">Créer</button>
            </form>
        </div>


        <div class="pwdTravail">
                <?php 
                    $type='travail';
                    $info=recupContent($_SESSION['name'],$type);
                    $range=count($info);
                    for($i=0;$i<$range;$i++){
                        $infoC=recupInfo($_SESSION['name']);
                        $key=$infoC['cle'];
                        $key_binary=hex2bin($key);
                        $iv=hex2bin($info[$i]['iv']);
                        $mdp=openssl_decrypt($info[$i]['mdp'],'aes-256-cbc',$key_binary,0,$iv);
                        echo "<div class='mdpTra'>";
                        echo '<h4>';
                        echo '<div class="nommdp">Site :</div><br>';
                        echo $info[$i]['name'];
                        echo '</h4>';
                        echo '</br>';
                        echo '<h4>';
                        echo '<div class="nommdp">Identifiant :</div><br>';
                        echo $info[$i]['pseudo'];
                        echo '</h4>';
                        echo '</br>';
                        echo '<div class="nommdp">Mot de passe :</div><br>';
                        echo '<h4 class="mdp">';
                        echo $mdp;
                        echo '</h4>';
                        echo '</br>';
                        echo '</div>';
                    }
                ?>
        </div>

        <p>Finance et achat</p>
        <div class="finance">
            <form action="index.php?appType=finance" method="POST">
                <h3>Ajouter un compte :</h3> <br>
                <label for="email">Site :</label>
                <input type="text" id="app" name="app" required><br>
                <label for="email">Mail/Identifiant :</label>
                <input type="text" id="iden" name="iden" required><br>
                <label for="email">Mot de passe :</label>
                <input type="text" id="mdp" name="mdp" required><br>
                <button class="boutons" type="submit">Créer</button>
            </form>
        </div>
            <div class="pwdFinance">
                <?php 
                    $type='finance';
                    $info=recupContent($_SESSION['name'],$type);
                    $range=count($info);
                    for($i=0;$i<$range;$i++){
                        $infoC=recupInfo($_SESSION['name']);
                        $key=$infoC['cle'];
                        $key_binary=hex2bin($key);
                        $iv=hex2bin($info[$i]['iv']);
                        $mdp=openssl_decrypt($info[$i]['mdp'],'aes-256-cbc',$key_binary,0,$iv);
                        echo "<div class='mdpTra'>";
                        echo '<h4>';
                        echo '<div class="nommdp">Site :</div><br>';
                        echo $info[$i]['name'];
                        echo '</h4>';
                        echo '</br>';
                        echo '<h4>';
                        echo '<div class="nommdp">Identifiant :</div><br>';
                        echo $info[$i]['pseudo'];
                        echo '</h4>';
                        echo '</br>';
                        echo '<div class="nommdp">Mot de passe :</div><br>';
                        echo '<h4 class="mdp">';
                        echo $mdp;
                        echo '</h4>';
                        echo '</br>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>

        <p>Loisirs</p>
        <div class="comm">
            <form action="index.php?appType=com" method="POST">
                <h3>Ajouter un compte :</h3> <br>
                <label for="email">Site :</label>
                <input type="text" id="app" name="app" required><br>
                <label for="email">Mail/Identifiant :</label>
                <input type="text" id="iden" name="iden" required><br>
                <label for="email">Mot de passe :</label>
                <input type="text" id="mdp" name="mdp" required><br>
                <button class="boutons" type="submit">Créer</button>
            </form>
        </div>
            <div class="pwdCom">
                <?php 
                    $type='com';
                    $info=recupContent($_SESSION['name'],$type);
                    $range=count($info);
                    for($i=0;$i<$range;$i++){
                        $infoC=recupInfo($_SESSION['name']);
                        $key=$infoC['cle'];
                        $key_binary=hex2bin($key);
                        $iv=hex2bin($info[$i]['iv']);
                        $mdp=openssl_decrypt($info[$i]['mdp'],'aes-256-cbc',$key_binary,0,$iv);
                        echo "<div class='mdpTra'>";
                        echo '<h4>';
                        echo '<div class="nommdp">Site :</div><br>';
                        echo $info[$i]['name'];
                        echo '</h4>';
                        echo '</br>';
                        echo '<h4>';
                        echo '<div class="nommdp">Identifiant :</div><br>';
                        echo $info[$i]['pseudo'];
                        echo '</h4>';
                        echo '</br>';
                        echo '<div class="nommdp">Mot de passe :</div><br>';
                        echo '<h4 class="mdp">';
                        echo $mdp;
                        echo '</h4>';
                        echo '</br>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>

        
        <p>Autre</p>
        <div class="autre">
            <form action="index.php?appType=autre" method="POST">
                <h3>Ajouter un compte :</h3> <br>
                <label for="email">Site :</label>
                <input type="text" id="app" name="app" required><br>
                <label for="email">Mail/Identifiant :</label>
                <input type="text" id="iden" name="iden" required><br>
                <label for="email">Mot de passe :</label>
                <input type="text" id="mdp" name="mdp" required><br>
                <button class="boutons" type="submit">Créer</button>
            </form>
        </div>
            <div class="pwdAutre">
                <?php 
                    $type='autre';
                    $info=recupContent($_SESSION['name'],$type);
                    $range=count($info);
                    for($i=0;$i<$range;$i++){
                        $infoC=recupInfo($_SESSION['name']);
                        $key=$infoC['cle'];
                        $key_binary=hex2bin($key);
                        $iv=hex2bin($info[$i]['iv']);
                        $mdp=openssl_decrypt($info[$i]['mdp'],'aes-256-cbc',$key_binary,0,$iv);
                        echo "<div class='mdpTra'>";
                        echo '<h4>';
                        echo '<div class="nommdp">Site :</div><br>';
                        echo $info[$i]['name'];
                        echo '</h4>';
                        echo '</br>';
                        echo '<h4>';
                        echo '<div class="nommdp">Identifiant :</div><br>';
                        echo $info[$i]['pseudo'];
                        echo '</h4>';
                        echo '</br>';
                        echo '<div class="nommdp">Mot de passe :</div><br>';
                        echo '<h4 class="mdp">';
                        echo $mdp;
                        echo '</h4>';
                        echo '</br>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </div>
</head>
<body>

<div class= "Générateur">
<h2>Générer un mot de passe</h2>
<input class="long" type="number" id="length" value="14" min="4" max="20" onkeydown="return false;">
    <label class="text_gener" for="length">Longueur du mot de passe</label>
    <br>

    <input type="checkbox" id="includeNumbers" checked>
    <label class="text_gener" for="includeNumbers">Inclure des chiffres</label><br>

    <input type="checkbox" id="includeSymbols" checked>
    <label class="text_gener" for="includeSymbols">Inclure des symboles</label><br>

    <input type="checkbox" id="includeUppercase" checked>
    <label class="text_gener" for="includeUppercase">Inclure des majuscules</label><br>
<br>
    <button onclick="GenPass()">Générer mot de passe</button>
    <button onclick="copyToClipboard()">Copier</button><br>
    <input type="text" id="passwordField" readonly>

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