<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - FitShop</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

<header class="header">
    <div class="logo">Fit<span>Shop</span></div>

    <nav class="nav">
        <a href="index.php">Accueil</a>
        <a href="produit.php">Produits</a>
        <a href="homme.php">Homme</a>
        <a href="femme.php">Femme</a>
        <a href="contact.php">Contact</a>
    </nav>

    <div class="button">
        <a href="afficher_panier.php" class="btn">Mon Panier</a>
        <a href="connexion.php" class="btn">Mon Compte</a>
    </div>
</header>

<section class="contact-section">
    <div class="contact-container">
        <h2>Contactez-nous</h2>
        <p>Vous avez une question ou besoin d'aide ? Envoyez-nous un message.</p>

        <form method="post" action="traitement_contact.php">
            <label for="nom">Nom complet</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom complet" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Votre email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Votre message" rows="5" required></textarea>

            <button type="submit" name="envoyer">Envoyer</button>
        </form>
    </div>
</section>

<footer class="footer">
    <p>© 2026 FitShop — Tous droits réservés</p>
</footer>

</body>
</html>
