<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: avis.php");
    exit;
}

$nom = trim($_POST["nom"] ?? "");
$note = (int)($_POST["note"] ?? 0);
$message = trim($_POST["message"] ?? "");

// validations :
$errors = [];

if ($nom === "" || mb_strlen($nom) < 2 || mb_strlen($nom) > 30) {
    $errors[] = "Nom invalide.";
}
if ($note < 1 || $note > 5) {
    $errors[] = "Note invalide.";
}
if ($message === "" || mb_strlen($message) < 5 || mb_strlen($message) > 300) {
    $errors[] = "Message invalide.";
}

if (!empty($errors)) {
    $_SESSION["avis_error"] = implode(" ", $errors);
    // garder les champs pour les remettre dans le formulaire
    $_SESSION["avis_old"] = ["nom" => $nom, "note" => $note, "message" => $message];
    header("Location: avis.php");
    exit;
} 

// initialiser le tableau en session si besoin
if (!isset($_SESSION["avis_clients"]) || !is_array($_SESSION["avis_clients"])) {
    $_SESSION["avis_clients"] = [];
}

// ajouter l’avis en tête (dernier avis d’abord)
array_unshift($_SESSION["avis_clients"], [
    "nom" => $nom,
    "note" => $note,
    "message" => $message,
    "createdAt" => time()
]);

$_SESSION["avis_success"] = "Merci, ton avis a été ajouté.";
unset($_SESSION["avis_old"]);

header("Location: avis.php");
exit;
