<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/register.css">
    <title>Enregistrement</title>
</head>
<body>

<div class="register-wrapper">
    <div class="register-card">
        <h2 class="register-title">Créer un compte</h2>
        <form action="../register_process.php" method="post" class="register-form" id="registerForm">
            <div class="input-group">
                <i class="fas fa-user input-icon"></i>
                <input type="text" id="fullname" name="fullname" placeholder="Nom complet" required>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope input-icon"></i>
                <input type="email" id="email" name="email" placeholder="Adresse e-mail" required>
            </div>
            <div class="input-group password">
                <i class="fas fa-lock input-icon"></i>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required oninput="updatePasswordStrength(this.value)">
                <span class="toggle-password" onclick="togglePasswordVisibility()">
                    <i class="fas fa-eye input-icon-eye"></i>
                </span>
                <div id="password-strength" class="password-strength"></div>
            </div>

            <button type="submit" class="register-button">S'enregistrer</button>
        </form>
        <div class="register-footer">
            Vous avez déjà un compte ? <a href="../index.html">Connexion</a>
        </div>
    </div>
</div>

<script src="../public/js/register.js"></script>
</body>
</html>
