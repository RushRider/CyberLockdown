<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation de mot de passe</title>
    <link href="assets/home.css" rel="stylesheet">
</head>
<body>
<header>
    <img src="assets/logo.png">
    <div class="theader">Réinitialisation de mot de passe</div>
    <div class="profile"><?php echo htmlspecialchars($_SESSION['id']); ?></div>
    <img src="assets/icon_avatar.png">
</header>

<div class="fenetre">
    <form action="submit_password_reset.php" method="POST">
        <h2>Demande de réinitialisation de mot de passe</h2>
        <label for="email">Adresse email:</label>
        <input type="email" id="email" name="email" required><br>
        <button type="submit">Envoyer</button>
    </form>
</div>

</body>
</html>
