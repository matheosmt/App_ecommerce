<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription - FitShop</title>
    <link rel="stylesheet" href="css/inscription.css">
</head>
<body>

<header class="header">
    <div class="logo">Fit<span>Shop</span></div>

    <nav class="nav">
        <a href="index.php">Accueil</a>
        <a href="produit.php">Produits</a>
        <a href="nutrition.php">Nutrition</a>
        <a href="entrainement.php">Entrainement</a>
        <a href="contact.php">Contact</a>
    </nav>

    <div class="button">
        <a href="afficher_panier.php" class="btn">Mon Panier</a>
        <a href="connexion.php" class="btn">Mon Compte</a>
    </div>
</header>

<section class="register-section">
    <div class="register-container">
        <h2>Créer un compte</h2>
        <form method="post" action="traitement_inscription.php">
            <label for="nom">Nom complet</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom complet" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Votre email" required>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>

            <label for="password_confirm">Confirmer le mot de passe</label>
            <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmez votre mot de passe" required>

            <button type="submit" name="inscription">S'inscrire</button>
        </form>

        <p>Vous avez déjà un compte ? <a href="connexion.php">Connectez-vous ici</a></p>
    </div>
</section>

<footer class="footer">
    <p>© 2026 FitShop — Tous droits réservés</p>
</footer>

</body>
</html>
