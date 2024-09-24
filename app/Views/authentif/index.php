<?php 

//include('../app/Views/header.php');



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <link rel="stylesheet" href="dist/css/styles.css"> <!-- Lien vers le fichier CSS externe -->
</head>
<body>
    <div class="login-container">
        <form action=".?controller=Vols&action=index" method="POST" class="login-form">
            <h2>Connexion</h2>
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Se connecter</button>
            <p class="signup-link">Pas encore de compte ? <a href="signup.php">S'inscrire</a></p>
        </form>
    </div>
</body>
</html>

     
<?php
//include('../app/Views/footer.php');
