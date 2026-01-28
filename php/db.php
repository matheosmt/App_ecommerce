<?php

session_start();

$db = 'ECOMMERCE';
$host = 'localhost';
$user = 'user.admin';
$pass = 'user.@dmin';
$charset = 'utf8mb4';

$dsn = "mysqli:host=$host;dbname=$db;charset=$charset";

try{
    $connexion=new PDO($dsn, $user, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}


catch (PDOException $e) {
    error_log($e->getMessage());
    die("Une erreur est survenue. Veuillez réessayer plus tard.");
}

?>



