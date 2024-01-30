<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./public/css/style.css">
    <link rel="stylesheet" type="text/css" href="./public/css/contact.css">
</head>
<body>

<header>
    <!-- Insérez ici le contenu de l'en-tête, comme le logo, les liens de navigation, etc. -->
</header>

<section class="contact-section">
    <div class="contact-card">
        <h2>Contactez-nous</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" placeholder="Votre adresse e-mail" required>
            </div>
            <div class="form-group">
                <label for="phone">Téléphone :</label>
                <input type="tel" id="phone" name="phone" placeholder="Votre numéro de téléphone">
            </div>
            <div class="form-group">
                <label for="subject">Sujet (Commande, Réservation, Autre) :</label>
                <input type="text" id="subject" name="subject" placeholder="Sujet de votre message" required>
            </div>
            <div class="form-group">
                <label for="message">Message (incluez les détails de votre commande) :</label>
                <textarea id="message" name="message" placeholder="Votre message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Envoyer</button>
        </form>
    </div>
</section>

<footer>
    <!-- Insérez ici le contenu du footer, comme les informations de contact, les liens rapides, etc. -->
</footer>

<script src="./public/js/contact.js"></script>
</body>
</html>
