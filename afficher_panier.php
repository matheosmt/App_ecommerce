<?php
session_start();

$total = 0;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon panier - FitShop</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        .panier-container {
            width: 80%;
            margin: 60px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #f5f5f5;
        }

        .total {
            text-align: right;
            font-size: 22px;
            margin-top: 20px;
        }

        .btn-danger {
            background: #e74c3c;
            color: #fff;
            padding: 8px 14px;
            border-radius: 20px;
            text-decoration: none;
        }

        .btn-danger:hover {
            background: #c0392b;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
    </style>
</head>

<body>

<header class="header">
    <div class="logo">Fit<span>Shop</span></div>
    <nav class="nav">
        <a href="index.php">Accueil</a>
        <a href="produit.php">Produits</a>
        <a href="contact.html">Contact</a>
    </nav>
    <a href="afficher_panier.php" class="btn">🛒 Mon Panier</a>
</header>

<div class="panier-container">

    <h2>🛒 Mon panier</h2>

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
