<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>App Ecommerce - Nutrition</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/nutrition.css">
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


<footer class="footer">
    <p>© 2026 FitShop — Tous droits réservés</p>
</footer>

</body>
</html>
