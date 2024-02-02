<?php
    $serveur = "mysql-sitewebpro.alwaysdata.net";
    $utilisateur = "345536";
    $motDePasse = "ToutEstPasBonDansLePHP2024";
    $baseDeDonnees = "sitewebpro_snowstorm";
    $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $baseDeDonnees);
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }
?>