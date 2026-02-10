<?php
session_start();

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

if (isset($_POST['ajouter'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prix = $_POST['prix'];

    if (isset($_SESSION['panier'][$id])) {
        $_SESSION['panier'][$id]['quantite']++;
    } else {
        $_SESSION['panier'][$id] = [
            'nom' => $nom,
            'prix' => $prix,
            'quantite' => 1
        ];
    }
}

if (isset($_GET['supprimer'])) {
    $id = $_GET['supprimer'];
    unset($_SESSION['panier'][$id]);
}

if (isset($_GET['vider'])) {
    $_SESSION['panier'] = [];
}

if (!empty($_SERVER['HTTP_REFERER'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location: index.php');
}
exit;

?>
