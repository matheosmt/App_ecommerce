<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>App Ecommerce</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
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

<section class="history">
    <div class="history-content">
        <p>
            Chez FitShop, nous partageons votre passion pour le sport et le bien-être. 
            Notre aventure a commencé avec une idée simple : proposer des équipements 
            et accessoires de qualité pour tous ceux qui veulent se dépasser, que vous 
            soyez débutant ou athlète confirmé.Nous sélectionnons chaque produit avec 
            soin pour vous offrir performance, confort et style. FitShop, c’est plus 
            qu’une boutique : c’est une communauté qui vous accompagne à chaque entraînement.
            Rejoignez-nous et découvrez tout ce qu’il vous faut pour rester motivé et 
            atteindre vos objectifs !
        </p>
    </div>
</section>

<section class="hero">
    <div class="hero-content">
        <h1>Équipe ton corps.<br>Dépasse tes limites.</h1>
        <p>Matériel de musculation, compléments et accessoires premium.</p>
        <a href="produit.php" class="btn btn-primary">Voir les produits</a>
    </div>
</section>

<section class="products">
    <h2>Produits populaires</h2>

    <div class="product-grid">

        <!-- PRODUIT 1 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/250" alt="Haltère 20kg">
            <h3>Haltère 20kg</h3>
            <p>49,99 €</p>

            <form method="post" action="panier.php">
                <input type="hidden" name="id" value="1">
                <input type="hidden" name="nom" value="Haltère 20kg">
                <input type="hidden" name="prix" value="49.99">
                <button type="submit" name="ajouter">Ajouter au panier</button>
            </form>
        </div>

        <!-- PRODUIT 2 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/250" alt="Whey Protéine">
            <h3>Whey Protéine</h3>
            <p>29,99 €</p>

            <form method="post" action="panier.php">
                <input type="hidden" name="id" value="2">
                <input type="hidden" name="nom" value="Whey Protéine">
                <input type="hidden" name="prix" value="29.99">
                <button type="submit" name="ajouter">Ajouter au panier</button>
            </form>
        </div>

        <!-- PRODUIT 3 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/250" alt="Gants de training">
            <h3>Gants de training</h3>
            <p>14,99 €</p>

            <form method="post" action="panier.php">
                <input type="hidden" name="id" value="3">
                <input type="hidden" name="nom" value="Gants de training">
                <input type="hidden" name="prix" value="14.99">
                <button type="submit" name="ajouter">Ajouter au panier</button>
            </form>
        </div>

    </div>
</section>

<section class="reviews">
    <div class="reviews-content">
        <h2>Avis de nos clients</h2>
        <p>Découvrez ce que nos clients pensent de nos produits et de notre service.</p>
        <a href="avis.php" class="btn btn-primary">Voir les avis</a>
    </div>
</section>


<footer class="footer">
    <p>© 2026 FitShop — Tous droits réservés</p>
</footer>

</body>
</html>
