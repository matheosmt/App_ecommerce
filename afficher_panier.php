<?php
session_start();

$total = 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon panier - FitShop</title>
    <link rel="stylesheet" href="css/afficher_panier.css">
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

<div class="panier-container">

    <h2>Mon panier</h2>

    <?php if (empty($_SESSION['panier'])): ?>

        <p>Votre panier est vide.</p>

    <?php else: ?>

        <table>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Sous-total</th>
                <th>Action</th>
            </tr>

            <?php foreach ($_SESSION['panier'] as $id => $produit): 
                $sousTotal = $produit['prix'] * $produit['quantite'];
                $total += $sousTotal;
            ?>
                <tr>
                    <td><?= htmlspecialchars($produit['nom']) ?></td>
                    <td><?= number_format($produit['prix'], 2) ?> €</td>
                    <td><?= $produit['quantite'] ?></td>
                    <td><?= number_format($sousTotal, 2) ?> €</td>
                    <td>
                        <a class="btn-danger" href="panier.php?supprimer=<?= $id ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <div class="total">
            <strong>Total : <?= number_format($total, 2) ?> €</strong>
        </div>

        <div class="actions">
            <a href="panier.php?vider=1" class="btn-danger">Vider le panier</a>
            <a href="index.php" class="btn">Continuer mes achats</a>
        </div>

    <?php endif; ?>

</div>

<footer class="footer">
    <p>© 2026 FitShop — Tous droits réservés</p>
</footer>

</body>
</html>
