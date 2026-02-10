<?php
session_start();

// Exemple d'avis clients
$avisClients = [
    ["nom"=>"Alice", "note"=>5, "message"=>"Super boutique ! Produits de qualité et livraison rapide."],
    ["nom"=>"Bob", "note"=>4, "message"=>"Très satisfait, je recommande surtout les haltères."],
    ["nom"=>"Claire", "note"=>5, "message"=>"Service client au top et produits conformes."],
    ["nom"=>"David", "note"=>3, "message"=>"Bonne boutique mais délai de livraison un peu long."],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Avis clients - FitShop</title>
    <link rel="stylesheet" href="css/avis.css">
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

<section class="reviews">
    <h2>Avis de nos clients</h2>
    <p>Découvrez ce que nos clients pensent de nos produits et de notre service.</p>

    <div class="reviews-grid">
        <?php foreach($avisClients as $avis): ?>
            <div class="review-card">
                <h3><?= htmlspecialchars($avis['nom']) ?></h3>
                <p class="note">Note : <?= str_repeat("★", $avis['note']) ?><?= str_repeat("☆", 5-$avis['note']) ?></p>
                <p class="message"><?= htmlspecialchars($avis['message']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="add-review">
        <button id="toggleForm" class="btn btn-primary">Laisser un avis</button>
    </div>

    <!-- FORMULAIRE CACHÉ -->
    <div id="reviewForm" class="review-form hidden">
        <h3>Votre avis</h3>
        <form method="post" action="submit_avis.php">
            <input type="text" name="nom" placeholder="Votre nom" required>
            
            <label for="note">Note :</label>
            <select name="note" required>
                <option value="5">5 ★</option>
                <option value="4">4 ★</option>
                <option value="3">3 ★</option>
                <option value="2">2 ★</option>
                <option value="1">1 ★</option>
            </select>
            
            <textarea name="message" placeholder="Votre message" rows="4" required></textarea>
            
            <button type="submit" class="btn btn-primary">Envoyer l'avis</button>
        </form>
    </div>
</section>

<footer class="footer">
    <p>© 2026 FitShop — Tous droits réservés</p>
</footer>

<script>
// Toggle affichage du formulaire
document.getElementById("toggleForm").addEventListener("click", function() {
    const form = document.getElementById("reviewForm");
    form.classList.toggle("hidden");
});
</script>

</body>
</html>
