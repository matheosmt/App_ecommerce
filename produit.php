<?php
session_start();

// Tableau de produits
$produits = [
    ["id"=>1, "nom"=>"Haltères", "prix"=>49.99, "img"=>"assets/img/haltères.jpg"],
    ["id"=>12, "nom"=>"Barres de musculation", "prix"=>49.99, "img"=>"assets/img/barre.jpg"],
    ["id"=>13, "nom"=>"Poids", "prix"=>19.99, "img"=>"assets/img/poids.jpg"],
    ["id"=>14, "nom"=>"Kettlebell", "prix"=>19.99, "img"=>"assets/img/kettlebell.jpg"],
    ["id"=>15, "nom"=>"Corde à sauter", "prix"=>19.99, "img"=>"assets/img/corde.jpg"],
    ["id"=>9, "nom"=>"Bande élastique", "prix"=>7.99, "img"=>"assets/img/elastique.jpg"],
    ["id"=>2, "nom"=>"Whey Protéine", "prix"=>29.99, "img"=>"assets/img/whey.jpg"],
    ["id"=>7, "nom"=>"Shaker Pro", "prix"=>12.99, "img"=>"assets/img/shaker.jpg"],
    ["id"=>3, "nom"=>"Gants de training", "prix"=>14.99, "img"=>"assets/img/gants.jpg"],
    ["id"=>8, "nom"=>"Veste de sport", "prix"=>39.99, "img"=>"assets/img/veste.jpg"],
    ["id"=>10, "nom"=>"Chaussures running", "prix"=>69.99, "img"=>"assets/img/chaussures.jpg"],
    ["id"=>11, "nom"=>"Jogging", "prix"=>29.99, "img"=>"assets/img/joggo.jpg"]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Produits - FitShop</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/produit.css">
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

<section class="products">
    <h2>Tous nos produits</h2>

    <div class="product-grid">
        <?php foreach($produits as $produit): ?>
            <div class="product-card">
                <img src="<?= $produit['img'] ?>" alt="<?= $produit['nom'] ?>">
                <h3><?= $produit['nom'] ?></h3>
                <p><?= number_format($produit['prix'], 2, ',', ' ') ?> €</p>

                <form method="post" action="panier.php">
                    <input type="hidden" name="id" value="<?= $produit['id'] ?>">
                    <input type="hidden" name="nom" value="<?= $produit['nom'] ?>">
                    <input type="hidden" name="prix" value="<?= $produit['prix'] ?>">
                    <button type="submit" name="ajouter">Ajouter au panier</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<footer class="footer">
    <p>© 2026 FitShop — Tous droits réservés</p>
</footer>

</body>
</html>
