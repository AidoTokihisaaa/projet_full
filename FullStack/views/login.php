<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/login.css">
    <title>Login</title>
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">
        <h2 class="login-title"><i class="fas fa-user-circle login-icon"></i> Connexion</h2>
        <form action="../login_process.php" method="post" class="login-form" id="loginForm">
            <div class="input-group">
                <i class="fas fa-user input-icon"></i>
                <input type="text" id="username" name="username" placeholder="Nom d'utilisateur" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock input-icon"></i>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required>
            </div>
            <button type="submit" class="login-button">Connexion</button>
        </form>
        <div class="login-footer">
            <a href="./register.php">S'enregistrer</a>
        </div>
    </div>
</div>

<script src="../public/js/login.js"></script>
</body>
</html>
